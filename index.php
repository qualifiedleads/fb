<!DOCTYPE html>
<html xmlns:fb="http://ogp.me/ns/fb#" class="no-js" itemscope="" itemtype="http://schema.org/Product" dir="rtl" lang="he"> 
  <head>
    <title>Concept ac LP</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes" />
    <meta charset="utf-8" />

    <!-- Facebook Graph Tags -->
    <!-- 'https://developers.facebook.com/docs/opengraph/' -->
    <meta property="og:title" content="Concept ac LP" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://limitless-fortress-6366.herokuapp.com/" />
    <meta property="og:image" content="https://limitless-fortress-6366.herokuapp.com/logo.png" />
    <meta property="og:site_name" content="Concept ac LP" />
    <meta property="og:description" content="My first app" />
    <meta property="fb:app_id" content="621963677837780" />

    <link rel="stylesheet" href="/stylesheets/screen.css" media="Screen" type="text/css" />
    <link rel="stylesheet" href="/stylesheets/mobile.css" media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" type="text/css" />

    <!--[if IEMobile]>
    <link rel="stylesheet" href="mobile.css" media="screen" type="text/css"  />
    <![endif]-->
  </head>
  <body>

    <h1>התקשרו כעת:<a href="tel:03-771-3026" onClick="_gaq.push(['_trackPageview', '/vpv/mehinahtml/header/ClickToCall']);" > 03-771-3026</a></h1>

    <!--Post-->
    <div class="post">
      <h1> קונספט, המכינה המובילה ללימודי עיצוב ואדריכלות  </h1>
      <img src="http://lnd.commondatastorage.googleapis.com/mehina.jpg" alt="image">
      <h2>המכינה המומלצת להכנת תיקי עבודות!</h2>
      <h3>ברוכים הבאים למכינה היחידה בישראל המתחייבת לקבלה שלך לאקדמיה ללימודי עיצוב!</h3>
      <p>הלימודים במכינה מהנים, חוויתיים ומכינים אותך ליום הגדול :</p>
      <ul>
        <li>אצלנו משלמים רק פעם אחת <u>עד שמתקבלים</u>.</li>
        <li>אנו מתחייבים לקבלתכם לשנקר, בצלאל, HIT, אונ' ת"א, הטכניון, ויצ"ו חיפה או מכללה למנהל.</li>
        <li>תוכנית לימודים מקיפה, מרוכזת ומקצועית. </li>
        <li>שיטה ייחודית ללימודי רישום, גם מי שלא יודע להחזיק עפרון, יהיה מופתע מהתוצאות!!!</li>
        <li>מפגש אישי עם מרצים מומחים מכל התחומים, ניתן להתכונן למספר תחומים באותה עלות!</li>
        <li>כל סטודנט מקבל ספרות מקצועית עדכנית הכוללת את כל מה שרצית לדעת על לימודי עיצוב באקדמיות השונות, טיפים, מבחנים לדוגמא ושאר סודות הקבלה...</li>
        <li>אבחון והתאמה מקצועית אישית בשיטת IFI הייחודית להכוונה ובחירת המקצוע המתאים עבורך. </li>
        <li>הנחיה אישית לבניית תיק עבודות מיוחד ללא הגבלה במספר הפגישות!</li>
        <li>המכינה כוללת הכנה למבחני הכניסה(כולל פסיכוטכני), לראיונות הקבלה, חשיפה ותרגול של מבחנים אמיתיים כפי שניתנים באקדמיות.</li>
        <li>המכינה כוללת צילום מקצועי חינם של העבודות לתיק עבודות שלך.</li>
        <li>ההרשמה למכינה כוללת ערכת עיצוב וציור מקצועית של כל הציוד הנדרש למכינה ולאחריה.</li>
      </ul>
      <p style="font-weight:bold">הקורס מאושר ע"י משרד התעשייה, המסחר והעבודה</p>
      <p>הטבה מיוחדת לנרשמים מעמוד זה.</p>
    </div>

    <!-- Contact Form -->
    <p>להתחלת קריירה בעיצוב ! אנא מלאו את הפרטים</p>
    
    <?php if (isset($_GET['contactErr']) && (int)$_GET['contactErr'] === 1): ?>
      <p style="color:red;font-weight:bold">Failed to send email, check your input and try again</p>
    <?php endif; ?>

    <form method="post" action="/mail.php">
      <div class="form-row">
        <label>שם:</label>
        <input type="text" name="name" placeholder="John Smith"/>
      </div>
      <div class="form-row">
        <label>טלפון:</label>
        <input type="text" name="phone" placeholder="+00 12345678"/>
      </div>
      <div class="form-row">
        <label>דואייל:</label>
        <input type="email" name="email" placeholder="j.smith@example.com"/>
      </div>
      <div class="form-row">
        <label>Details</label>
        <textarea name="details" placeholder="Add your message here"></textarea>
      </div>
      <input type="submit" value="לחץ לקבלת מידע"/>
    </form>

  </body>
</html>
