<script>
    $(document).on('click', '.authenticated', function () {
        // event.preventDefault();
        let user = '{{ auth()->user() ? 1 : 0 }}';
        let url = $(this).attr('href');
        // console.log(url)
        if(user == 0)
        {
            sessionStorage.setItem('url', url);
            event.preventDefault();
            $('#loginModalCenter').modal('show');
        }
    })
</script>

<!-- Login Process -->
<script>
    $('#loginModalCenter').on('hide.bs.modal', function (e) {
        $('#login_email').removeClass('border-danger');
        $('#login_email_error').text('')
        $('#login_password').removeClass('border-danger');
        $('#login_password_error').text('')
        $('#invalid_credentials').addClass('d-none');
        $('#login_email').val('')
        $('#login_password').val('')
    })

    $(document).on('input', '#login_email', function() {
        $('#login_email').removeClass('border-danger');
        $('#login_email_error').text('')
    });

    $(document).on('input', '#login_password', function() {
        $('#login_password').removeClass('border-danger');
        $('#login_password_error').text('')
    });

    $(document).on('submit', '#login_form', function() {
        event.preventDefault();

        var form = document.getElementById('login_form');
        var formData = new FormData(form);

        $.ajax({
            url: "{{ route('user-login') }}",
            method: 'POST',
            header : {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.status == 'success') {
                    location.reload();
                } else {
                    $('#invalid_credentials').removeClass('d-none');
                    $('#invalid_credentials').text('Invalid username or password!');
                }
            },
            error: function (error) {
                // alert('Your form was not sent successfully.');
                var errors = error.responseJSON.errors;
                if(errors.email != undefined) {
                    $('#login_email').addClass('border-danger');
                    $('#login_email_error').text(errors.email[0])
                } else {
                    $('#login_email').removeClass('border-danger');
                    $('#login_email_error').text('')
                }

                if(errors.password != undefined) {
                    $('#login_password').addClass('border-danger');
                    $('#login_password_error').text(errors.password[0])
                } else {
                    $('#login_password').removeClass('border-danger');
                    $('#login_password_error').text('')
                }
            }
        });
    });
</script>

<!-- Registration Process -->
<script>
    $('#registerModalCenter').on('hide.bs.modal', function (e) {
        $('#registration_first_name').removeClass('border-danger');
        $('#registration_first_name_error').text('')
        $('#registration_last_name').removeClass('border-danger');
        $('#registration_last_name_error').text('')
        $('#registration_phone').removeClass('border-danger');
        $('#registration_phone_error').text('')
        $('#registration_email').removeClass('border-danger');
        $('#registration_email_error').text('')
        $('#registration_password').removeClass('border-danger');
        $('#registration_password_error').text('')
        $('#registration_first_name').val('')
        $('#registration_last_name').val('')
        $('#registration_phone').val('')
        $('#registration_email').val('')
        $('#registration_password').val('')
    })

    $(document).on('input', '#registration_first_name', function() {
        $('#registration_first_name').removeClass('border-danger');
        $('#registration_first_name_error').text('')
    });

    $(document).on('input', '#registration_last_name', function() {
        $('#registration_last_name').removeClass('border-danger');
        $('#registration_last_name_error').text('')
    });

    $(document).on('input', '#registration_phone', function() {
        $('#registration_phone').removeClass('border-danger');
        $('#registration_phone_error').text('')
    });

    $(document).on('input', '#registration_email', function() {
        $('#registration_email').removeClass('border-danger');
        $('#registration_email_error').text('')
    });

    $(document).on('input', '#registration_password', function() {
        $('#registration_password').removeClass('border-danger');
        $('#registration_password_error').text('')
    });

    $(document).on('submit', '#registration_form', function() {
        event.preventDefault();

        var form = document.getElementById('registration_form');
        var formData = new FormData(form);

        $.ajax({
            url: "{{ route('user-registration') }}",
            method: 'POST',
            header : {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                if(response.status == 'success') {
                    location.reload();
                }
            },
            error: function (error) {
                // alert('Your form was not sent successfully.');
                var errors = error.responseJSON.errors;
                if(errors.first_name != undefined) {
                    $('#registration_first_name').addClass('border-danger');
                    $('#registration_first_name_error').text(errors.first_name[0])
                } else {
                    $('#registration_first_name').removeClass('border-danger');
                    $('#registration_first_name_error').text('')
                }

                if(errors.last_name != undefined) {
                    $('#registration_last_name').addClass('border-danger');
                    $('#registration_last_name_error').text(errors.last_name[0])
                } else {
                    $('#registration_last_name').removeClass('border-danger');
                    $('#registration_last_name_error').text('')
                }

                if(errors.phone != undefined) {
                    $('#registration_phone').addClass('border-danger');
                    $('#registration_phone_error').text(errors.phone[0])
                } else {
                    $('#registration_phone').removeClass('border-danger');
                    $('#registration_phone_error').text('')
                }

                if(errors.email != undefined) {
                    $('#registration_email').addClass('border-danger');
                    $('#registration_email_error').text(errors.email[0])
                } else {
                    $('#registration_email').removeClass('border-danger');
                    $('#registration_email_error').text('')
                }

                if(errors.password != undefined) {
                    $('#registration_password').addClass('border-danger');
                    $('#registration_password_error').text(errors.password[0])
                } else {
                    $('#registration_password').removeClass('border-danger');
                    $('#registration_password_error').text('')
                }
            }
        });
    });
</script>
