<script>
    @if(session('success')||session('error')||session('logout')||session('expire')||session('inactive')||session('unknown'))
    openLoginModal();
    @elseif(session('status'))
    openEmailModal();
    @elseif(session('reset'))
    openPasswordModal();
    @endif

    function showRegisterForm() {
        $('.loginBox, .emailBox, .passwordBox').fadeOut('fast', function () {
            $('.registerBox').fadeIn('fast');
            $('.login-footer').fadeOut('fast', function () {
                $('.register-footer').fadeIn('fast');
            });
            $('.modal-title').html('Sign Up');
        });
        $('.error').removeClass('alert alert-danger').html('');
    }
    function showLoginForm() {
        $('#loginModal .registerBox, .emailBox, .passwordBox').fadeOut('fast', function () {
            $('.loginBox').fadeIn('fast');
            $('.register-footer').fadeOut('fast', function () {
                $('.login-footer').fadeIn('fast');
            });
            $('.modal-title').html('Sign In');
        });
        $('.error').removeClass('alert alert-danger').html('');
    }

</script>