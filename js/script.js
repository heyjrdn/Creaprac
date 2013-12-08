$( document ).ready(function() {

    document.querySelector( '#_cierra' ).onclick = function()
    {
        document.querySelector( '.alert' ).style.display = "none";
    };

    document.querySelector( '#_enviarMensaje' ).onclick = function()
    {
        var complete = true;
        $( '#_error1' ).hide();
        $( '#_error2' ).hide();
        $( '#_error3' ).hide();
        $( '#_error4' ).hide();
        $( '#_error5' ).hide();
        $( '#_error6' ).hide();
        $( '#_error7' ).hide();
        $( '#_error8' ).hide();
        $( '#_error9' ).hide();
        $( '#_error10' ).hide();

        var regex_email = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var regex_phone = /[0-9]+/;

        //Check name
        if (1 > document.querySelector( '#_first' ).value.length)
        {
            $( '#_error1' ).show();
            complete = false;
        }

        //Check email
        if (1 > document.querySelector( '#_email' ).value.length)
        {
            $( '#_error2' ).show();
            complete = false;
        }
        else if (!regex_email.test(document.querySelector( '#_email' ).value))
        {
            $( '#_error3' ).show();
            complete = false;
        }

        //Check phone
        if (1 > document.querySelector( '#_phone' ).value.length)
        {
            $( '#_error4' ).show();
            complete = false;
        }
        else if (!regex_phone.test(document.querySelector( '#_phone' ).value))
        {
            $( '#_error5' ).show();
            complete = false;
        }

        //Check company
        if (1 > document.querySelector( '#_company' ).value.length)
        {
            $( '#_error6' ).show();
            complete = false;
        }

        //Check city
        if (1 > document.querySelector( '#_city' ).value.length)
        {
            $( '#_error7' ).show();
            complete = false;
        }

        //check state
        if (1 > document.querySelector( '#_state' ).value.length)
        {
            $( '#_error8' ).show();
            complete = false;
        }

        //check country
        if (1 > document.querySelector( '#_country' ).value.length)
        {
            $( '#_error9' ).show();
            complete = false;
        }

        //Check message
        if (1 > document.querySelector( '#_message' ).value.length)
        {
            $( '#_error10' ).show();
            complete = false;
        }

        if (!complete)
        {
            $( '.alert' ).hide();

            $( 'html, body' ).animate({ scrollTop: 0 }, 'fast');
            $( '.alert' ).show( 'slow' );
            return false;
        }
    };
});