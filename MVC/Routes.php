<?php
Route::set('index.php', function() {
    Index::CreateView('Index');
  });

Route::set('about-us', function() {
  AboutUs::test();
  AboutUs::CreateView('AboutUs');
  
});

Route::set('contact-us', function() {
    ContactUs::CreateView('ContactUs');
  });

?>