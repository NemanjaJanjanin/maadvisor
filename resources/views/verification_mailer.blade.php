<h1>Hello {{ $username }},</h1>
<p>
	Thank you for signing up!<br>
	Please click this link to activate your account:

    <a href="{{ url('email_verification').'?user_id='.$user_id.'&verification_code='.$verification_code }}"> 
         Verification Link 
    </a>
</p>