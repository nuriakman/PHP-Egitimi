# Tarih ve Zaman Komutları

Bu işlevler PHP betiğinizin çalıştığı sunucunun tarih ve saati üzerinde işlem yaparlar. Tarih ve saati farklı biçemlerde göstermek için bu işlevleri kullanabilirsiniz.

Tarih ve zaman bilgisi dahili olarak 64 bitlik bir sayı olarak saklanır, dolayısıyla mantıken kullanışlı tarihler (negatif yıllar dahil) desteklenir. Aralık, geçmişte yaklaşık 292 milyar yıldan, gelecekte yaklaşık 292 milyar yıla kadardır.

Bilginize: Bu işlevlerin sunucunuzun yerel zaman ayarlarına bağlı olarak işlem yaptığını lütfen aklınızdan çıkarmayın. Yaz saati uygulamasına dikkat edin. Örneğin, süre ekleme işlemi için $date += 7*24*60*60 değil $date = strtotime('+7 days', $date) kullanın. Ayrıca, bu işlevlerin artık yılları hesaba kattığını unutmayın.


## Komut Listesi
Komut |Anlamı|
------------|-------------|
[checkdate](http://php.net/checkdate)| Miladi tarihi doğrular
[date_add](http://php.net/date_add)| DateTime::add işlevinin takma adıdır
[date_create_from_format](http://php.net/date_create_from_format)| DateTime::createFromFormat işlevinin takma adıdır
[date_create_immutable_from_format](http://php.net/date_create_immutable_from_format)| Takma Adı: DateTimeImmutable::createFromFormat
[date_create_immutable](http://php.net/date_create_immutable)| Takma Adı: DateTimeImmutable::__construct
[date_create](http://php.net/date_create)| DateTime::__construct için bir takma ad
[date_date_set](http://php.net/date_date_set)| DateTime::setDate işlevinin takma adıdır
[date_default_timezone_get](http://php.net/date_default_timezone_get)| Betik içerisindeki tüm tarih/zaman işlevleri tarafından kullanılan öntanımlı zaman dilimini getirir
[date_default_timezone_set](http://php.net/date_default_timezone_set)| Betik içerisindeki tüm tarih/zaman işlevleri tarafından kullanılan öntanımlı zaman dilimini ayarlar
[date_diff](http://php.net/date_diff)| DateTime::diff işlevinin takma adıdır
[date_format](http://php.net/date_format)| DateTime::format işlevinin takma adıdır
[date_get_last_errors](http://php.net/date_get_last_errors)| DateTime::getLastErrors işlevinin takma adıdır
[date_interval_create_from_date_string](http://php.net/date_interval_create_from_date_string)| DateInterval::createFromDateString işlevinin takma adıdır
[date_interval_format](http://php.net/date_interval_format)| DateInterval::format işlevinin takma adıdır
[date_isodate_set](http://php.net/date_isodate_set)| DateTime::setISODate işlevinin takma adıdır
[date_modify](http://php.net/date_modify)| DateTime::modify işlevinin takma adıdır
[date_offset_get](http://php.net/date_offset_get)| DateTime::getOffset işlevinin takma adıdır
[date_parse_from_format](http://php.net/date_parse_from_format)| Get info about given date formatted according to the specified format
[date_parse](http://php.net/date_parse)| Verilen tarih hakkındaki ayrıntılı bilgiyi ilişkisel dizi olarak döndürür
[date_sub](http://php.net/date_sub)| DateTime::sub işlevinin takma adıdır
[date_sun_info](http://php.net/date_sun_info)| Güneşin doğuşu/batışı ve alacakaranlık başlangıcı/sonu hakkında bilgi içeren bir dizi döndürür
[date_sunrise](http://php.net/date_sunrise)| Belirtilen gün ve konum için şafak zamanını döndürür
[date_sunset](http://php.net/date_sunset)| Verilen gün ve konum için günbatımı zamanını döndürür
[date_time_set](http://php.net/date_time_set)| DateTime::setTime işlevinin takma adıdır
[date_timestamp_get](http://php.net/date_timestamp_get)| DateTime::getTimestamp işlevinin takma adıdır
[date_timestamp_set](http://php.net/date_timestamp_set)| DateTime::setTimestamp işlevinin takma adıdır
[date_timezone_get](http://php.net/date_timezone_get)| DateTime::getTimezone işlevinin takma adıdır
[date_timezone_set](http://php.net/date_timezone_set)| DateTime::setTimezone işlevinin takma adıdır
[date](http://php.net/date)| Yerel tarihi/saati biçimlendirir
[getdate](http://php.net/getdate)| Tarih/zaman bilgisi getirir
[gettimeofday](http://php.net/gettimeofday)| Geçerli zamanı getirir
[gmdate](http://php.net/gmdate)| Bir tarih/saati GMT/UTC tarih/saati olarak biçemler
[gmmktime](http://php.net/gmmktime)| Bir GMT tarihi için Unix zaman damgasını döndürür
[gmstrftime](http://php.net/gmstrftime)| Yerel ayarlara göre tarih ve saati, GMT/UTC türüne çevirir
[idate](http://php.net/idate)| Yerel zamanı/tarihi tamsayı olarak biçimlendirir
[localtime](http://php.net/localtime)| Yerel zamanı getirir
[microtime](http://php.net/microtime)| Geçerli Unix zaman damgasını mikrosaniye olarak döndürür
[mktime](http://php.net/mktime)| Bir tarih için Unix zaman damgasını döndürür
[strftime](http://php.net/strftime)| Format a local time/date according to locale settings
[strptime](http://php.net/strptime)| strftime işleviyle üretilen zaman ve tarihleri çözümler
[strtotime](http://php.net/strtotime)| Parse about any English textual datetime description into a Unix timestamp
[time](http://php.net/time)| Geçerli Unix zaman damgasını döndürür
[timezone_abbreviations_list](http://php.net/timezone_abbreviations_list)| DateTimeZone::listAbbreviations işlevinin takma adıdır
[timezone_identifiers_list](http://php.net/timezone_identifiers_list)| DateTimeZone::listIdentifiers işlevinin takma adıdır
[timezone_location_get](http://php.net/timezone_location_get)| DateTimeZone::getLocation işlevinin takma adıdır
[timezone_name_from_abbr](http://php.net/timezone_name_from_abbr)| Kısaltmasından, zaman diliminin adını döndürür
[timezone_name_get](http://php.net/timezone_name_get)| DateTimeZone::getName işlevinin takma adıdır
[timezone_offset_get](http://php.net/timezone_offset_get)| DateTimeZone::getOffset işlevinin takma adıdır
[timezone_open](http://php.net/timezone_open)| DateTimeZone::__construct için takma ad
[timezone_transitions_get](http://php.net/timezone_transitions_get)| DateTimeZone::getTransitions işlevinin takma adıdır
[timezone_version_get](http://php.net/timezone_version_get)| Gets the version of the timezonedb
