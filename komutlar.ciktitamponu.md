# Çıktı Tamponu Komutları

Çıktı denetim işlevleri, betikten gönderilen çıktıyı denetiminizde tutmaya yardımcı olurlar. Bu özellik, çok çeşitli durumlarda yararlı olabilir, özellikle de betiğiniz veriyi çıktılamaya başladıktan sonra bir başlık göndermek isterseniz. Çıktı denetim işlevleri, header() ve setcookie() işlevlerini kullanarak başlık gönderimini etkilemez, sadece PHP kod blokları arasındaki veriler ve echo gibi işlevler etkilenir.

## Komut Listesi
Komut |Anlamı| 
------------|-------------|
- ```flush``` |Çıktı tamponunu boşaltır
- ```ob_clean``` |Çıktı tamponunu temizler (siler)
- ```ob_end_clean``` |Çıktı tamponunu temizler (siler) ve tamponu kapatır
- ```ob_end_flush```| Çıktı tamponunu boşaltır (gönderir) ve tamponu kapatır
- ```ob_flush```| Çıktı tamponunu boşaltır (gönderir)
- ```ob_get_clean```| Geçerli çıktı tamponun içeriğini döndürüp tamponu siler
- ```ob_get_contents```| Çıktı tamponunun içeriği ile döner
- ```ob_get_flush```| Çıktı tamponunu boşaltır, içeriğini bir dizge olarak döndürür ve çıktı tamponlamasını kapatır
- ```ob_get_length```| Çıktı tamponunundaki içeriğin uzunluğunu döndürür
- ```ob_get_level```| Çıktı tamponlama mekanizmasının iç içelik seviyesini döndürür
- ```ob_get_status```| Çıktı tamponlarının durumu ile döner
- ```ob_gzhandler```| Çıktı tamponunu gziplemek için ob_start geriçağırım işlevi
- ```ob_implicit_flush``` |Örtük boşaltmayı açar/kapar
- ```ob_list_handlers```| Kullanımdaki çıktı eylemcileri listeler
- ```ob_start```| Çıktı tamponlamasını başlatır
- ```output_add_rewrite_var```| URL yeniden yazım değerlerini ekler
- ```output_reset_rewrite_vars```| URL yeniden yazma değerlerini sıfırlar
