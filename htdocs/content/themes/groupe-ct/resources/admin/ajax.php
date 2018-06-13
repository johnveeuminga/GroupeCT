<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../../../../../../vendor/autoload.php';
use Mailgun\Mailgun;

function sendMessage($to, $subject, $text) {
    //Your credentials
    $mg = new Mailgun("key-3b091c2b4257fc6514c32cbf97d191fc");
    $domain = "www.groupect.com";

    $mg->sendMessage($domain, array(
            'from'=>'donotreply@groupect.com',
            'to'=> $to,
            'subject' => $subject,
            'html' => $text
        )
    );
}

Ajax::listen('newsletter', function() {

    $mailchimp = new MailchimpHelper();

    if (
        isset($_POST['newsletter-title']) && $_POST['newsletter-title'] !== '' &&
        isset($_POST['newsletter-firstname']) && $_POST['newsletter-firstname'] !== '' &&
        isset($_POST['newsletter-lastname']) && $_POST['newsletter-lastname'] !== '' &&
        isset($_POST['newsletter-compagny-name']) && $_POST['newsletter-compagny-name'] !== '' &&
        isset($_POST['newsletter-phone']) && $_POST['newsletter-phone'] !== '' &&
        isset($_POST['newsletter-email']) && $_POST['newsletter-email'] !== '' && filter_var($_POST['newsletter-email'], FILTER_VALIDATE_EMAIL)
    ) {
        $result = $mailchimp->save(
            $_POST['newsletter-email'],
            [
                'FNAME' => $_POST['newsletter-firstname'],
                'LNAME' => $_POST['newsletter-lastname'],
                'TITLE' => $_POST['newsletter-title'],
                'BUSINESS' => $_POST['newsletter-compagny-name'],
                'PHONE' => $_POST['newsletter-phone'],
            ]
        );

        if ($result['status'] === 'pending') {
            echo json_encode([
                'status' => 'success'
            ]);
            die();
        } else {
            echo json_encode([
                'status' => 'failed',
                'error' => [
                    'code' => 'email-exists',
                    'message' => pll__('Votre adresse est déjà inscrite dans notre base de données, merci de votre intérêt.'),
                ]
            ]);
        }
    } else {
        echo json_encode([
            'status' => 'failed',
            'error' => [
                'code' => 'invalid-request',
                'message' => pll__('La requête n\'est pas valide, veuillez réessayer.'),
            ]
        ]);
    }
    die();
});

Ajax::listen('contact', function() {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $to = 'ventes@ctgroupect.com';

    $subject = 'Demande d\'information - formulaire Contact du site Web';
    $body = '';
    $body .= '<p>Titre : ' . $_POST['contact-title'] . '</p>';
    $body .= '<p>Prénom : ' . $_POST['contact-firstname'] . '</p>';
    $body .= '<p>Nom : ' . $_POST['contact-lastname'] . '</p>';
    $body .= '<p>Entreprise : ' . $_POST['contact-compagny-name'] . '</p>';
    $body .= '<p>Ville : ' . $_POST['contact-city'] . '</p>';
    $body .= '<p>Département : ' . $_POST['contact-departement'] . '</p>';
    $body .= '<p>Courriel : ' . $_POST['contact-email'] . '</p>';
    $body .= '<p>Téléphone : ' . $_POST['contact-phone'] . '</p>';
    $body .= '<p>Poste : ' . $_POST['contact-ext'] . '</p>';
    $body .= '<p>Message : ' . nl2br($_POST['contact-message']) . '</p>';
    $lang = pll_current_language() === 'fr' ? 'français' : 'anglais';
    $body .= '<p>Langue du formulaire : ' . $lang . '</p>';


    if (isset($_POST['contact-accept']) && $_POST['contact-accept'] === "true") {
        $mailchimp = new MailchimpHelper();

        $mailchimp->save(
            $_POST['contact-email'],
            [
                'FNAME' => $_POST['contact-firstname'],
                'LNAME' => $_POST['contact-lastname'],
                'TITLE' => $_POST['contact-title'],
                'BUSINESS' => $_POST['contact-compagny-name'],
                'PHONE' => $_POST['contact-phone'],
            ]
        );
    }

    if (!isset($_SERVER['APP_ENV']) || 'production' !== $_SERVER['APP_ENV']) {
        $body .= '<p>NOTE DE DEV --- SERA ENVOYÉ À ' . $to . ' EN PRODUCTION</p>';
        $to = ['michael.villeneuve@ctrlweb.ca', ' JFRivard@ctgroupect.com', 'marketing@ctgroupect.com', 'j-f.rivard@hotmail.com'];
    }

//    $headers = array('Content-Type: text/html; charset=UTF-8','From: Groupe CT Website <donotreply@groupect.com');
//    wp_mail( $to, $subject, $body, $headers );
   // sendMessage($to, $subject, $body);
    sendMessage($to, $subject, htmlspecialchars_decode($body));

    die();
});

Ajax::listen('assistance', function() {

    switch ($_POST['assistance-office']) {
        case 1:
            $to = 'service@ctgroupect.com';
            break;
        case 2:
            $to = 'service@sacgroupect.com';
            break;
        case 3:
            $to = 'support@sacgroupect.com';
            break;
    }

    $subject = 'Demande d’assistance - formulaire du site Web';
    $body = '';
    $body .= '<p>Titre : ' . $_POST['assistance-title'] . '</p>';
    $body .= '<p>Prénom : ' . $_POST['assistance-firstname'] . '</p>';
    $body .= '<p>Nom : ' . $_POST['assistance-lastname'] . '</p>';
    $body .= '<p>Entreprise : ' . $_POST['assistance-compagny-name'] . '</p>';
    $body .= '<p>Courriel : ' . $_POST['assistance-email'] . '</p>';
    $body .= '<p>Téléphone : ' . $_POST['assistance-phone'] . '</p>';
    $body .= '<p>Poste: ' . $_POST['assistance-ext'] . '</p>';
    $body .= '<p>Numéro de série de l’appareil : ' . $_POST['assistance-serial'] . '</p>';
    $body .= '<p>Bureau : ' . $_POST['assistance-office-name'] . '</p>';
    $problem = nl2br($_POST['assistance-msg']);
    $body .= '<p>Description du problème : ' . $problem . '</p>';
    $body .= '<p>Heures d’ouverture : ' . $_POST['assistance-opening01'] . ':' . $_POST['assistance-opening02'] . ' à ' . $_POST['assistance-opening03'] . ':' . $_POST['assistance-opening04'] . '</p>';
    $opened = $_POST['assistance-closed'] ? 'Oui' : 'Non';
    $body .= '<p>Bureau fermé le midi : ' . $opened . '</p>';
    $body .= '<p>Test d’impression : <a href="' . home_url() . $_POST['assistance-file'] . '">' . home_url() . $_POST['assistance-file'] . '</a></p>';
    $lang = pll_current_language() === 'fr' ? 'français' : 'anglais';
    $body .= '<p>Langue du formulaire : ' . $lang . '</p>';

    if (!isset($_SERVER['APP_ENV']) || 'production' !== $_SERVER['APP_ENV']) {
        $body .= '<p>NOTE DE DEV --- SERA ENVOYÉ À ' . $to . ' EN PRODUCTION</p>';
        $to = ['michael.villeneuve@ctrlweb.ca', ' JFRivard@ctgroupect.com', 'marketing@ctgroupect.com', 'j-f.rivard@hotmail.com'];
    }

    $headers = array('Content-Type: text/html; charset=UTF-8','From: Groupe CT Website <donotreply@groupect.com');
    //sendMessage($to, $subject, $body);
    sendMessage($to, $subject, htmlspecialchars_decode($body));

    echo json_encode([
        'status' => 'success'
    ]);

    die();
});

Ajax::listen('fourniture', function() {

    switch ($_POST['fourniture-office']) {
        case 1:
            $to = $_POST['fourniture-contract'] ? 'fournitures@ctgroupect.com' : 'fournitures@ctgroupect.com';
            break;
        case 2:
            $to = $_POST['fourniture-contract'] ? 'supplies@ctgroupect.com' : 'supplies@ctgroupect.com';
            break;
        case 3:
            $to = $_POST['fourniture-contract'] ? 'fournitures@sacgroupect.com' : 'fournitures@sacgroupect.com';
            break;
        case 4:
            $to = $_POST['fourniture-contract'] ? 'support@sacgroupect.com' : 'support@sacgroupect.com';
        break;
    }

    $subject = 'Commande de fournitures - formulaire du site Web';
    $body = '';
    $body .= '<p>Titre : ' . $_POST['fourniture-title'] . '</p>';
    $body .= '<p>Prénom : ' . $_POST['fourniture-firstname'] . '</p>';
    $body .= '<p>Nom : ' . $_POST['fourniture-lastname'] . '</p>';
    $body .= '<p>Entreprise : ' . $_POST['fourniture-compagny-name'] . '</p>';
    $body .= '<p>Courriel : ' . $_POST['fourniture-email'] . '</p>';
    $body .= '<p>Téléphone : ' . $_POST['fourniture-phone'] . '</p>';
    $body .= '<p>Poste: ' . $_POST['fourniture-ext'] . '</p>';
    $body .= '<p>Numéro de série de l’appareil : ' . $_POST['fourniture-serial'] . '</p>';

    $contract = $_POST['fourniture-contract'] ? 'Oui' : 'Non';
    $body .= '<p>Appareil sous contrat de service : ' . $contract . '</p>';

    $body .= '<p>Bureau : ' . $_POST['fourniture-office-name'] . '</p>';
    $commande = nl2br($_POST['fourniture-msg']);
    $body .= '<p>Détail de la commande : ' . $commande . '</p>';
    $lang = pll_current_language() === 'fr' ? 'français' : 'anglais';
    $body .= '<p>Langue du formulaire : ' . $lang . '</p>';

    if (!isset($_SERVER['APP_ENV']) || 'production' !== $_SERVER['APP_ENV']) {
        $body .= '<p>NOTE DE DEV --- SERA ENVOYÉ À ' . $to . ' EN PRODUCTION</p>';
        $to = ['michael.villeneuve@ctrlweb.ca', ' JFRivard@ctgroupect.com', 'marketing@ctgroupect.com', 'j-f.rivard@hotmail.com'];
    }

    $headers = array('Content-Type: text/html; charset=UTF-8','From: Groupe CT Website <donotreply@groupect.com');
    //echo htmlspecialchars_decode($body);
    //die();
    sendMessage($to, $subject, htmlspecialchars_decode($body));

    echo json_encode([
        'status' => 'success'
    ]);

    die();
});

function sanitizeFilename($f) {
    // a combination of various methods
    // we don't want to convert html entities, or do any url encoding
    // we want to retain the "essence" of the original file name, if possible
    // char replace table found at:
    // http://www.php.net/manual/en/function.strtr.php#98669
    $replace_chars = array(
        'Š'=>'S', 'š'=>'s', 'Ð'=>'Dj','Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A',
        'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E', 'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I',
        'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U', 'Ú'=>'U',
        'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss','à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a',
        'å'=>'a', 'æ'=>'a', 'ç'=>'c', 'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i',
        'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o', 'ö'=>'o', 'ø'=>'o', 'ù'=>'u',
        'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y', 'ƒ'=>'f'
    );
    $f = strtr($f, $replace_chars);
    // convert & to "and", @ to "at", and # to "number"
    $f = preg_replace(array('/[\&]/', '/[\@]/', '/[\#]/'), array('-and-', '-at-', '-number-'), $f);
    $f = preg_replace('/[^(\x20-\x7F)]*/','', $f); // removes any special chars we missed
    $f = str_replace(' ', '-', $f); // convert space to hyphen
    $f = str_replace('\'', '', $f); // removes apostrophes
    $f = preg_replace('/[^\w\-\.]+/', '', $f); // remove non-word chars (leaving hyphens and periods)
    $f = preg_replace('/[\-]+/', '-', $f); // converts groups of hyphens into one
    return strtolower($f);
}

Ajax::listen('upload-file', function() {
    if ($_FILES['file']['size'] < 26214400) {
        $file_name = time() . '-' . sanitize_file_name($_FILES['file']['name']);
        $target_file = wp_upload_dir()['basedir'] . '/assistance-files/' . $file_name;
        move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

        echo json_encode([
            'status' => 'success',
            'file_path' => $file_name,
        ]);

    } else {

        echo json_encode([
            'status' => 'failed',
        ]);
    }
    die();
});

Ajax::listen('get-products', function(){
    $result = [];
    if(isset($_GET['filters'])){
        $filter_array = json_decode(stripslashes($_GET['filters']));

        $attributes = [];
        foreach($filter_array as $index=>$filter_group){
            if(!empty($filter_group)){
                $values = [];
                foreach($filter_group as $filter){
                    $values[] = $filter;
                }

                $attributes[] = [
                    'taxonomy' => $index,
                    'field' => 'term_id',
                    'terms' => $values,
                ];
            }  
        }

        $attributes[] =[
            'taxonomy' => $_GET['taxonomy'],
            'field' => 'term_id',
            'terms' => $_GET['term_id']
        ];

        $args = [
            'post_type' => 'product',
        ];

        if($attributes){
            $args['tax_query'] = [
                'relation' => 'AND', 
                $attributes
            ];
        }

        $query = new WP_Query($args);


        if(!$query->posts){
            $result['data'] = '<p class="font-sans-mada text-center text-lg py-4 w-full font-bold">No Products according to search</p>';
        }else{
            ob_start();
        ?>
            <?php foreach($query->posts as $product): ?> 
                <?php  
                    $product_image = has_post_thumbnail($product->ID) ? get_the_post_thumbnail_url($product->ID) : wp_get_attachment_url(1991); 
                ?>
                <div class="col-md-3 product-brand__products-col">
                    <div class="product-brand__product my-8 text-center px-2">
                        <img src="<?php echo $product_image; ?>" alt="<?php echo $product->post_title?>" class="w-100 block">
                        <a href="<?php echo get_the_permalink($product->ID); ?>" class="font-sans-mada text-blue text-lg">
                            <?php echo $product->post_title; ?>
                        </a>
                    </div>
                </div>
            <?php
            endforeach;
            $result['data'] = ob_get_clean();
        }
             
    }else{
        $result['error'] = true;
        die();
    }

    echo json_encode($result);
    die();
});
