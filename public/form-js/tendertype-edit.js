var KTApptendertypesSave = function () {
    var jsonURL = $('#urlListData').attr('data-info');
    var crudUrlTemplate = JSON.parse(jsonURL);
    var id = new URLSearchParams(window.location.search).get('id');
    var _officeAdd;
    var _handleOfficeAddForm = function(e) {
    var validation;
    var form = document.getElementById('kt_tendertype_update_form');
       // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
       validation = FormValidation.formValidation(
             form,
             {
                fields: {
                  name_en: {
                     validators: {
                        notEmpty: {
                           message: 'This field is required'
                        },
                        regexp: {
                           regexp: /^[-+.,)@:\/&?''=""( A-Za-z0-9]*$/,
                           message: 'This field can consist of alphabetical characters, spaces, digits only'
                        },
                     },
                     },
                     name_hi: {
                              validators: {
                              notEmpty: {
                                 message: 'This field is required'
                              },
                              regexp: {
                                 regexp: /^[-+.,)@:\/&?''=""( A-Za-z0-9]*$/,
                                 message: 'This field can consist of alphabetical characters, spaces, digits only'
                              },
                        },
                     },
                     sort_order: {
                           validators: {
                              notEmpty: {
                                 message: 'This field is required'
                              },
                              regexp: {
                              regexp: /^[0-9]$/,
                              message: 'This field can consist of number characters, spaces, digits only'
                           },
                        },
                     },
                },
                plugins: {
                   trigger: new FormValidation.plugins.Trigger(),
                   bootstrap: new FormValidation.plugins.Bootstrap5()
                }
             }
       );
       $('.submit-tendertype-btn').click( function(e) {
             e.preventDefault();
             validation.validate().then(function(status) {
                if (status == 'Valid') {
                   submitButton.setAttribute('data-kt-indicator', 'on');
                   submitButton.disabled = true;
                   //$('#examAddModal').modal('hide');
                    $('#loading').addClass('loading');
                    $('#loading-content').addClass('loading-content');
                  var formData= new FormData(form);
                  // formData.append("kt_description_en", $('#kt_summernote_en').summernote('code'));
                  // formData.append("kt_description_hi", $('#kt_summernote_hi').summernote('code'));
                  // formData.append("tab_type", $("input[type='radio'][name='tabtype']:checked").val());
                axios.post(crudUrlTemplate.update+'?id='+id,
                            formData, {
                   }).then(function (response) {
                   if (response) {
                     $('#loading').removeClass('loading');
                     $('#loading-content').removeClass('loading-content');
                      toastr.success(
                         "Update successfully!", 
                         "Update Type!", 
                         {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                      );
                      setTimeout(function() {
                         if (history.scrollRestoration) {
                            history.scrollRestoration = 'manual';
                         }
                        location.href = 'tendertype-edit?id='+id // reload page
                      }, 1500);
                      
                   } else {
                     $('#loading').removeClass('loading');
                     $('#loading-content').removeClass('loading-content');
                      toastr.error(
                         "Sorry, the information is incorrect, please try again.", 
                         "Something went wrong!", 
                         {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                      );
                      }
                   })
                   .catch(function (error) {
                     $('#loading').removeClass('loading');
                     $('#loading-content').removeClass('loading-content');
                         toastr.error(
                            "Sorry, looks like there are some errors detected, please try again B.", 
                            "Something went wrong!", 
                            {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                         );
                      }).then(() => {
                            // Hide loading indication
                            submitButton.removeAttribute('data-kt-indicator');
                            // Enable button
                            submitButton.disabled = false;
                      });
                   } else {
                     $('#loading').removeClass('loading');
                     $('#loading-content').removeClass('loading-content');
                         toastr.error(
                               "Sorry, looks like there are some errors detected, please try again K.", 
                               "Something went wrong!", 
                               {timeOut: 0, extendedTimeOut: 0, closeButton: true, closeDuration: 0}
                            );
                      }
                })
             });
       }
 return {
         init: function () {
             _officeAdd = $('#kt_tendertype_update_form');
             _handleOfficeAddForm();
             submitButton = document.querySelector('#kt_update_tendertype_submit');
             // Handle forms
         }
     };
 }();
 // On document ready
 jQuery(document).ready(function() {
    KTApptendertypesSave.init();
 });