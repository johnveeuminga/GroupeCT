<?php

use \DrewM\MailChimp\MailChimp;

class MailchimpHelper
{
    const MAILCHIMP_API = '0b003ff7df75d3f451566064db6dcb5e-us16';
    const LIST_FR = '5f21d98fbc';
    const LIST_EN = '92aeab597b';

    protected $mailchimp;

    function __construct()
    {
        $this->mailchimp = new MailChimp(self::MAILCHIMP_API);
    }

    public static function mailchimp_list()
    {
        return pll_current_language() === 'fr' ? MailchimpHelper::LIST_FR : MailchimpHelper::LIST_EN;
    }

    public function save($email, $merge_fields = array(), $opt_in = true)
    {
        return $this->mailchimp->post("lists/" . self::mailchimp_list() . "/members", [
            'email_address' => $email,
            'status'        => $opt_in ? 'pending' : 'subscribed',
            'merge_fields' => $merge_fields,
        ]);
    }

}