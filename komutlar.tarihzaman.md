# Tarih ve Zaman Komutları

Bu işlevler PHP betiğinizin çalıştığı sunucunun tarih ve saati üzerinde işlem yaparlar. Tarih ve saati farklı biçemlerde göstermek için bu işlevleri kullanabilirsiniz.

Tarih ve zaman bilgisi dahili olarak 64 bitlik bir sayı olarak saklanır, dolayısıyla mantıken kullanışlı tarihler (negatif yıllar dahil) desteklenir. Aralık, geçmişte yaklaşık 292 milyar yıldan, gelecekte yaklaşık 292 milyar yıla kadardır.

Bilginize: Bu işlevlerin sunucunuzun yerel zaman ayarlarına bağlı olarak işlem yaptığını lütfen aklınızdan çıkarmayın. Yaz saati uygulamasına dikkat edin. Örneğin, süre ekleme işlemi için $date += 7*24*60*60 değil $date = strtotime('+7 days', $date) kullanın. Ayrıca, bu işlevlerin artık yılları hesaba kattığını unutmayın.


## Komut Listesi
Komut |Anlamı|
------------|-------------|
```checkdate``` | Miladi tarihi doğrular
```date_add``` | DateTime::add işlevinin takma adıdır
```date_create_from_format``` | DateTime::createFromFormat işlevinin takma adıdır
```date_create_immutable_from_format``` | Takma Adı: DateTimeImmutable::createFromFormat
```date_create_immutable``` | Takma Adı: DateTimeImmutable::__construct
```date_create``` | DateTime::__construct için bir takma ad
```date_date_set``` | DateTime::setDate işlevinin takma adıdır
```date_default_timezone_get``` | Betik içerisindeki tüm tarih/zaman işlevleri tarafından kullanılan öntanımlı zaman dilimini getirir
```date_default_timezone_set``` | Betik içerisindeki tüm tarih/zaman işlevleri tarafından kullanılan öntanımlı zaman dilimini ayarlar
```date_diff``` | DateTime::diff işlevinin takma adıdır
```date_format``` | DateTime::format işlevinin takma adıdır
```date_get_last_errors``` | DateTime::getLastErrors işlevinin takma adıdır
```date_interval_create_from_date_string``` | DateInterval::createFromDateString işlevinin takma adıdır
```date_interval_format``` | DateInterval::format işlevinin takma adıdır
```date_isodate_set``` | DateTime::setISODate işlevinin takma adıdır
```date_modify``` | DateTime::modify işlevinin takma adıdır
```date_offset_get``` | DateTime::getOffset işlevinin takma adıdır
```date_parse_from_format``` | Get info about given date formatted according to the specified format
```date_parse``` | Verilen tarih hakkındaki ayrıntılı bilgiyi ilişkisel dizi olarak döndürür
```date_sub``` | DateTime::sub işlevinin takma adıdır
```date_sun_info``` | Güneşin doğuşu/batışı ve alacakaranlık başlangıcı/sonu hakkında bilgi içeren bir dizi döndürür
```date_sunrise``` | Belirtilen gün ve konum için şafak zamanını döndürür
```date_sunset``` | Verilen gün ve konum için günbatımı zamanını döndürür
```date_time_set``` | DateTime::setTime işlevinin takma adıdır
```date_timestamp_get``` | DateTime::getTimestamp işlevinin takma adıdır
```date_timestamp_set``` | DateTime::setTimestamp işlevinin takma adıdır
```date_timezone_get``` | DateTime::getTimezone işlevinin takma adıdır
```date_timezone_set``` | DateTime::setTimezone işlevinin takma adıdır
```date``` | Yerel tarihi/saati biçimlendirir
```getdate``` | Tarih/zaman bilgisi getirir
```gettimeofday``` | Geçerli zamanı getirir
```gmdate``` | Bir tarih/saati GMT/UTC tarih/saati olarak biçemler
```gmmktime``` | Bir GMT tarihi için Unix zaman damgasını döndürür
```gmstrftime``` | Yerel ayarlara göre tarih ve saati, GMT/UTC türüne çevirir
```idate``` | Yerel zamanı/tarihi tamsayı olarak biçimlendirir
```localtime``` | Yerel zamanı getirir
```microtime``` | Geçerli Unix zaman damgasını mikrosaniye olarak döndürür
```mktime``` | Bir tarih için Unix zaman damgasını döndürür
```strftime``` | Format a local time/date according to locale settings
```strptime``` | strftime işleviyle üretilen zaman ve tarihleri çözümler
```strtotime``` | Parse about any English textual datetime description into a Unix timestamp
```time``` | Geçerli Unix zaman damgasını döndürür
```timezone_abbreviations_list``` | DateTimeZone::listAbbreviations işlevinin takma adıdır
```timezone_identifiers_list``` | DateTimeZone::listIdentifiers işlevinin takma adıdır
```timezone_location_get``` | DateTimeZone::getLocation işlevinin takma adıdır
```timezone_name_from_abbr``` | Kısaltmasından, zaman diliminin adını döndürür
```timezone_name_get``` | DateTimeZone::getName işlevinin takma adıdır
```timezone_offset_get``` | DateTimeZone::getOffset işlevinin takma adıdır
```timezone_open``` | DateTimeZone::__construct için takma ad
```timezone_transitions_get``` | DateTimeZone::getTransitions işlevinin takma adıdır
```timezone_version_get``` | Gets the version of the timezonedb