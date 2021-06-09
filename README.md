# Laravel8-Turkce-Dil-Dosyalari
### Laravel 8 Türkce Dil Dosyaları

Proje içerisinde resource -> lang klasörüne "tr" adında klasör oluşturup bu dosyaları içine atın.

Daha sonra config -> app.php dosyası içerisindeki,   
     **`'locale' => 'en'`** 
kodunu,   
     **`'locale' => 'tr'`** 
ile değiştirip kaydedin. 

Bir alt satırdaki **`'fallback_locale' => 'en'`**  bu kodu 'en' olarak bırakın. Eğer tr klasörü içerisinde bulamadığı olursa en klasörü içerisinde arayacaktır. Yedek dil dosyası olarak düşünülebilir. 
