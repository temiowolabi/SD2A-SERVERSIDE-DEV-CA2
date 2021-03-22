function username_validation(){
    'use strict';
    var username_name = document.getElementById("username");
    var username_value = document.getElementById("username").value;
    var username_length = username_value.length;
    var letters = /^[0-9a-zA-Z]+$/;
    if(username_length < 4 || !username_value.match(letters))
    {
    document.getElementById('name_err').innerHTML = 'Username must be 4 chracters long and alphanuric chracters only.';
    username_name.focus();
    document.getElementById('name_err').style.color = "#FF0000";
    }
    else
    {
    document.getElementById('name_err').innerHTML = 'Valid username';
    document.getElementById('name_err').style.color = "#00AF33";
    }
    }


    function passwd_validation(){
        'use strict';
        var passid_name = document.getElementById("passid");
        var passid_value = document.getElementById("passid").value;
        var passid_length = passid_value.length;
        if(passid_length<6)
        {
        document.getElementById('passwd_err').innerHTML = 'Password must be at least 6 chracters long';
        passid_name.focus();
        document.getElementById('passwd_err').style.color = "#FF0000";
        }
        else
        {
        document.getElementById('passwd_err').innerHTML = 'Valid password';
        document.getElementById('passwd_err').style.color = "#00AF33";
        }
        }

        function email_validation(){
            'use strict';
            var mailformat = /^\w+([\.\-]?\w+)*@\w+([\.\-]?\w+)*(\.\w{2,3})+$/;
            var email_name = document.getElementById("email");
            var email_value = document.getElementById("email").value;
            var email_length = email_value.length;
            if(!email_value.match(mailformat) || email_length === 0)
            {
            document.getElementById('email_err').innerHTML = 'This is not a valid email format.';
            email_name.focus();
            document.getElementById('email_err').style.color = "#FF0000";
            }
            else
            {
            document.getElementById('email_err').innerHTML = 'Valid email format';
            document.getElementById('email_err').style.color = "#00AF33";
            }
            }


