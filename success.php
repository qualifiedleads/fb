<h2>Thank you</h2>
<p>This page should contain the google tags, and is only sent to the user when contact form was filled in properly
Navigating to sitename.com/mail.php or not filling in all form fields will redirect to index and give the user a
message about invalid input</p>

<!-- Google Tags (Only included on success) -->
<?php if(isset($contactMailSent) && $contactMailSent === true): ?>
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-23J6" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-23J6');</script>
<?php endif; ?>