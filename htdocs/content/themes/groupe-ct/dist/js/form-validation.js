/*
 * Translated default messages for the jQuery validation plugin.
 * Locale: FR (French; français)
 */
(function($) {
    $(document).ready(function() {

        function isElementInViewport (el) {

            //special bonus for those using jQuery
            if (typeof jQuery === "function" && el instanceof jQuery) {
                el = el[0];
            }

            var rect = el.getBoundingClientRect();

            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && /*or $(window).height() */
                rect.right <= (window.innerWidth || document.documentElement.clientWidth) /*or $(window).width() */
            );
        }

        /**** JQUERY VALIDATION *****/
        var $form = $( "#contact-us-form" );

        $form.validate({
            groups: {
                required_fields: 'contact-title contact-firstname contact-lastname contact-compagny-name contact-city contact-email contact-phone contact-message'
            },
            invalidHandler: function(event, validator) {
                $('html, body').animate({scrollTop:$('#contact-us-form').position().top}, 'fast');
                $form.find('.error-email').hide();
                $form.find('.error-required').hide();

                var errors = validator.numberOfInvalids();

                if (errors) {
                    $form.find('.error-msg-container').show();

                    if (validator.errorMap.hasOwnProperty('contact-title') ||
                        validator.errorMap.hasOwnProperty("contact-firstname") ||
                        validator.errorMap.hasOwnProperty("contact-lastname") ||
                        validator.errorMap.hasOwnProperty("contact-compagny-name") ||
                        validator.errorMap.hasOwnProperty("contact-contact-city") ||
                        validator.errorMap.hasOwnProperty("contact-email") ||
                        validator.errorMap.hasOwnProperty("contact-phone") ||
                        validator.errorMap.hasOwnProperty("contact-message")
                    ) {
                        $form.find('.error-required').show();
                    }

                    if (validator.errorMap.hasOwnProperty("contact-email")) {
                        $form.find('.error-email').show();
                    }
                }
            },
            errorPlacement: function(error, element) {

            },
            rules: {
                'contact-title': {
                    required: true
                },
                'contact-firstname': {
                    required: true
                },
                'contact-lastname': {
                    required: true
                },
                'contact-compagny-name': {
                    required: true
                },
                'contact-city': {
                    required: true
                },
                'contact-email': {
                    required: true,
                    email: true
                },
                'contact-phone': {
                    required: true
                },
                'contact-message': {
                    required: true
                }
            },
            submitHandler: function(form) {
                $form.find('.error-msg-container').hide();
                $form.find('.contact-field-container').hide(250, function () {
                    $form.find('.contact-success-message').show(250);
                });

                $.ajax({
                    url: groupect.ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'contact',
                        'contact-title': $form.find('#contact-title').val(),
                        'contact-firstname': $form.find('#contact-firstname').val(),
                        'contact-lastname': $form.find('#contact-lastname').val(),
                        'contact-compagny-name': $form.find('#contact-compagny-name').val(),
                        'contact-city': $form.find('#contact-city').val(),
                        'contact-departement': $form.find('#contact-departement').val(),
                        'contact-phone': $form.find('#contact-phone').val(),
                        'contact-ext': $form.find('#contact-ext').val(),
                        'contact-email': $form.find('#contact-email').val(),
                        'contact-message': $form.find('#contact-message').val(),
                        'contact-accept': $form.find('#contact-accept').is(':checked') ? true : false
                    }
                });

                return false;
            },

            highlight: function(element) {
                $(element).addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).removeClass("field-error");
            }
        });

        var $form_assistance = $( "#form-assistance" ),
            can_submit_assistance = true;

        $form_assistance.validate({
            groups: {
                required_fields: 'assistance-title assistance-firstname assistance-lastname assistance-compagny-name assistance-email assistance-phone assistance-msg assistance-serial assistance-office'
            },
            invalidHandler: function(event, validator) {
                $('html, body').animate({scrollTop: $form_assistance.position().top}, 'fast');
                $form_assistance.find('.error-email').hide();
                $form_assistance.find('.error-required').hide();


                var errors = validator.numberOfInvalids();

                if (errors) {
                    $form_assistance.find('.error-msg-container').show();

                    if (validator.errorMap.hasOwnProperty('assistance-title') ||
                        validator.errorMap.hasOwnProperty("assistance-firstname") ||
                        validator.errorMap.hasOwnProperty("assistance-lastname") ||
                        validator.errorMap.hasOwnProperty("assistance-compagny-name") ||
                        validator.errorMap.hasOwnProperty("assistance-email") ||
                        validator.errorMap.hasOwnProperty("assistance-phone") ||
                        validator.errorMap.hasOwnProperty("assistance-email") ||
                        validator.errorMap.hasOwnProperty("assistance-msg") ||
                        validator.errorMap.hasOwnProperty("assistance-office") ||
                        validator.errorMap.hasOwnProperty("assistance-serial")
                    ) {
                        $form_assistance.find('.error-required').show();
                    }

                    if (validator.errorMap.hasOwnProperty("assistance-email")) {
                        $form_assistance.find('.error-email').show();
                    }
                }
            },
            errorPlacement: function(error, element) {

            },
            rules: {
                'assistance-title': {
                    required: true
                },
                'assistance-firstname': {
                    required: true
                },
                'assistance-lastname': {
                    required: true
                },
                'assistance-compagny-name': {
                    required: true
                },
                'assistance-city': {
                    required: true
                },
                'assistance-email': {
                    required: true,
                    email: true
                },
                'assistance-phone': {
                    required: true
                },
                'assistance-msg': {
                    required: true
                },
                'assistance-serial': {
                    required: true
                },
                'assistance-office': {
                    required: true
                },
                'assistance-message': {
                    required: true
                }
            },
            submitHandler: function(form) {
                $form_assistance.find('.error-msg-container').hide();
                $form_assistance.find('.assistance-field-container').hide(250, function () {
                    $form_assistance.find('.assistance-success-message').show(250);
                });

                $.ajax({
                    url: groupect.ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'assistance',
                        'assistance-title': $form_assistance.find('#assistance-title').val(),
                        'assistance-firstname': $form_assistance.find('#assistance-firstname').val(),
                        'assistance-lastname': $form_assistance.find('#assistance-lastname').val(),
                        'assistance-email': $form_assistance.find('#assistance-email').val(),
                        'assistance-phone': $form_assistance.find('#assistance-phone').val(),
                        'assistance-ext': $form_assistance.find('#assistance-ext').val(),
                        'assistance-compagny-name': $form_assistance.find('#assistance-compagny-name').val(),
                        'assistance-office': $form_assistance.find('#assistance-office').val(),
                        'assistance-office-name': $form_assistance.find('#assistance-office option:selected').text(),
                        'assistance-serial': $form_assistance.find('#assistance-serial').val(),
                        'assistance-opening01': $form_assistance.find('#assistance-opening01').val(),
                        'assistance-opening02': $form_assistance.find('#assistance-opening02').val(),
                        'assistance-opening03': $form_assistance.find('#assistance-opening03').val(),
                        'assistance-opening04': $form_assistance.find('#assistance-opening04').val(),
                        'assistance-msg': $form_assistance.find('#assistance-msg').val(),
                        'assistance-file': $form_assistance.find('#file-path').attr('href'),
                        'assistance-closed': $form.find('#fourniture-closed').is(':checked') ? true : false,
                    }
                }).done(function (data) {
                    is_submitting = false;
                    $form_assistance.find('.submit-btn > i').remove();
                    $form_assistance.find('.content-container').hide(250);
                    if (data.status === 'success') {
                        $form_assistance.find('#assistance-success').show(250, function() {
                            console.log(isElementInViewport($('#assistance-success')));
                            if (false === isElementInViewport($('#assistance-success'))) {
                                setTimeout(function () {
                                    $('html, body').animate({scrollTop:$('#assistance-success').position().top}, 'fast');
                                }, 25);
                            }
                        });
                    } else {
                        $form_assistance.find('.server-error').html(data.error.message).show();
                        $form_assistance.find('.form-errors').show(250, function () {
                            setTimeout(function () {
                                $('html, body').animate({scrollTop:$('.form-errors').position().top - 30}, 'fast');
                            }, 50);
                        });
                    }
                });

                return false;
            },

            highlight: function(element) {
                $(element).addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).removeClass("field-error");
            }
        });


        $('#assistance-upload').on('change', function () {
            var fileInput = document.getElementById('assistance-upload');
            var file = fileInput.files[0];
            var formData = new FormData();
            $('#file-too-large').hide();
            $('#file-path').hide();
            $form_assistance.find('.submit-btn').append("<i style='margin-left: 15px;' class='fa fa-spin fa-spinner'></i>");
            $form_assistance.find('.submit-btn').css('opacity', '0.8');
            can_submit_assistance = false;

            if (file.size > 25000000) {
                $('#file-too-large').show(250);
                return false;
            }

            formData.append('file', file);
            formData.append('action', 'upload-file');

            $.ajax({
                url: groupect.ajaxurl,
                type: 'POST',
                dataType: 'json',
                data: formData,
                processData: false,
                contentType: false
            }).done(function (data) {
                can_submit_assistance = true;
                $form_assistance.find('.submit-btn > i').remove();
                $form_assistance.find('.submit-btn').css('opacity', '1');

                if (data.status === 'success') {
                    $('#file-path').attr('href', '/content/uploads/assistance-files/' + data.file_path);
                    $('#file-path').html(data.file_path);
                    $('#file-path').show(250);
                } else {
                    $('#file-too-large').show(250);
                }
            });
        });


        var $form_fourniture = $( "#form-fourniture" ),
            can_submit_fourniture = true;

        $form_fourniture.validate({
            groups: {
                required_fields: 'fourniture-title fourniture-firstname fourniture-lastname fourniture-compagny-name fourniture-email fourniture-phone fourniture-msg fourniture-serial fourniture-office'
            },
            invalidHandler: function(event, validator) {
                $('html, body').animate({scrollTop: $form_fourniture.position().top}, 'fast');
                $form_fourniture.find('.error-email').hide();
                $form_fourniture.find('.error-required').hide();

                var errors = validator.numberOfInvalids();

                if (errors) {
                    $form_fourniture.find('.error-msg-container').show();

                    if (validator.errorMap.hasOwnProperty('fourniture-title') ||
                        validator.errorMap.hasOwnProperty("fourniture-firstname") ||
                        validator.errorMap.hasOwnProperty("fourniture-lastname") ||
                        validator.errorMap.hasOwnProperty("fourniture-compagny-name") ||
                        validator.errorMap.hasOwnProperty("fourniture-email") ||
                        validator.errorMap.hasOwnProperty("fourniture-phone") ||
                        validator.errorMap.hasOwnProperty("fourniture-msg") ||
                        validator.errorMap.hasOwnProperty("fourniture-serial") ||
                        validator.errorMap.hasOwnProperty("fourniture-office")
                    ) {
                        $form_fourniture.find('.error-required').show();
                    }

                    if (validator.errorMap.hasOwnProperty("fourniture-email")) {
                        $form_fourniture.find('.error-email').show();
                    }
                }
            },
            errorPlacement: function(error, element) {

            },
            rules: {
                'fourniture-title': {
                    required: true
                },
                'fourniture-firstname': {
                    required: true
                },
                'fourniture-lastname': {
                    required: true
                },
                'fourniture-compagny-name': {
                    required: true
                },
                'fourniture-email': {
                    required: true,
                    email: true
                },
                'fourniture-phone': {
                    required: true
                },
                'fourniture-msg': {
                    required: true
                },
                'fourniture-serial': {
                    required: true
                },
                'fourniture-office': {
                    required: true
                },
            },
            submitHandler: function(form) {
                $form_fourniture.find('.error-msg-container').hide();
                $form_fourniture.find('.fourniture-field-container').hide(250, function () {
                    $form_fourniture.find('.fourniture-success-message').show(250);
                });

                $.ajax({
                    url: groupect.ajaxurl,
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        action: 'fourniture',
                        'fourniture-title': $form_fourniture.find('#fourniture-title').val(),
                        'fourniture-firstname': $form_fourniture.find('#fourniture-firstname').val(),
                        'fourniture-lastname': $form_fourniture.find('#fourniture-lastname').val(),
                        'fourniture-email': $form_fourniture.find('#fourniture-email').val(),
                        'fourniture-phone': $form_fourniture.find('#fourniture-phone').val(),
                        'fourniture-ext': $form_fourniture.find('#fourniture-ext').val(),
                        'fourniture-compagny-name': $form_fourniture.find('#fourniture-compagny-name').val(),
                        'fourniture-office': $form_fourniture.find('#fourniture-office').val(),
                        'fourniture-office-name': $form_fourniture.find('#fourniture-office option:selected').text(),
                        'fourniture-serial': $form_fourniture.find('#fourniture-serial').val(),
                        'fourniture-msg': $form_fourniture.find('#fourniture-msg').val(),
                        'fourniture-contract': $form.find('#fourniture-contract').is(':checked') ? true : false,
                        'fourniture-closed': $form_fourniture.find('#fourniture-closed').val()
                    }
                }).done(function (data) {
                    is_submitting = false;
                    $form_fourniture.find('.submit-btn > i').remove();
                    $form_fourniture.find('.content-container').hide(250);
                    if (data.status === 'success') {
                        $form_fourniture.find('#fourniture-success').show(250, function() {
                            if (false === isElementInViewport($('#fourniture-success'))) {
                                setTimeout(function () {
                                    $('html, body').animate({scrollTop:$('#fourniture-success').position().top}, 'fast');
                                }, 25);
                            }
                        });
                    } else {
                        $form_fourniture.find('.server-error').html(data.error.message).show();
                        $form_fourniture.find('.form-errors').show(250, function () {
                            setTimeout(function () {
                                $('html, body').animate({scrollTop:$('.form-errors').position().top - 30}, 'fast');
                            }, 50);
                        });
                    }
                });

                return false;
            },

            highlight: function(element) {
                $(element).addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).removeClass("field-error");
            }
        });


        var $form_newsletter = $( "#form-newsletter" ),
            can_submit_newsletter = true;

        $form_newsletter.validate({
            groups: {
                required_fields: 'newsletter-title newsletter-firstname newsletter-lastname newsletter-compagny-name newsletter-email newsletter-phone'
            },
            invalidHandler: function(event, validator) {
                $('html, body').animate({scrollTop: $form_newsletter.position().top}, 'fast');
                $form_newsletter.find('.error-email').hide();
                $form_newsletter.find('.error-required').hide();

                var errors = validator.numberOfInvalids();

                if (errors) {
                    $form_newsletter.find('.error-msg-container').show();

                    if (validator.errorMap.hasOwnProperty('newsletter-title') ||
                        validator.errorMap.hasOwnProperty("newsletter-firstname") ||
                        validator.errorMap.hasOwnProperty("newsletter-lastname") ||
                        validator.errorMap.hasOwnProperty("newsletter-compagny-name") ||
                        validator.errorMap.hasOwnProperty("newsletter-email") ||
                        validator.errorMap.hasOwnProperty("newsletter-phone")
                    ) {
                        $form_newsletter.find('.error-required').show();
                    }

                    if (validator.errorMap.hasOwnProperty("newsletter-email")) {
                        $form_newsletter.find('.error-email').show();
                    }
                }
            },
            errorPlacement: function(error, element) {

            },
            rules: {
                'newsletter-title': {
                    required: true
                },
                'newsletter-firstname': {
                    required: true
                },
                'newsletter-lastname': {
                    required: true
                },
                'newsletter-compagny-name': {
                    required: true
                },
                'newsletter-email': {
                    required: true,
                    email: true
                },
                'newsletter-phone': {
                    required: true
                },
                'newsletter-msg': {
                    required: true
                },
                'newsletter-serial': {
                    required: true
                },
                'newsletter-office': {
                    required: true
                },
            },
            submitHandler: function(form) {
                $form_newsletter.find('.error-email').hide();
                $form_newsletter.find('.error-required').hide();
                if (can_submit_newsletter) {
                    can_submit_newsletter = false;
                    $form_newsletter.find('.form-messages').hide(250);
                    $.ajax({
                        url: groupect.ajaxurl,
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            action: 'newsletter',
                            'newsletter-title': $form_newsletter.find('#newsletter-title').val(),
                            'newsletter-firstname': $form_newsletter.find('#newsletter-firstname').val(),
                            'newsletter-lastname': $form_newsletter.find('#newsletter-lastname').val(),
                            'newsletter-compagny-name': $form_newsletter.find('#newsletter-compagny-name').val(),
                            'newsletter-phone': $form_newsletter.find('#newsletter-phone').val(),
                            'newsletter-email': $form_newsletter.find('#newsletter-email').val()
                        }
                    }).done(function(data) {
                        if (data.status === 'success') {
                            $form_newsletter.find('.newsletter-desc').hide();
                            $form_newsletter.find('.contact-field-container').hide(250, function () {
                                $form_newsletter.find('.newsletter-success').show(250, function() {
                                    setTimeout(function () {
                                        $('html, body').animate({scrollTop:$('#home-newsletter').position().top}, 'fast');
                                    }, 25);
                                });
                            });
                        } else {
                            can_submit_newsletter = true;
                            $form_newsletter.find('.server-error').html(data.error.message).show();
                            $form_newsletter.find('.form-errors').show(250, function () {
                                setTimeout(function () {
                                    $('html, body').animate({scrollTop:$('.form-errors').position().top - 30}, 'fast');
                                }, 50);
                            });
                        }
                    });
                }
                return false;
            },

            highlight: function(element) {
                $(element).addClass("field-error");
            },
            unhighlight: function(element) {
                $(element).removeClass("field-error");
            }
        });
    });
}(jQuery));