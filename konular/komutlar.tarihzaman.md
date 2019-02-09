# Tarih ve Zaman Komutları

Bu işlevler PHP betiğinizin çalıştığı sunucunun tarih ve saati üzerinde işlem yaparlar. Tarih ve saati farklı biçemlerde göstermek için bu işlevleri kullanabilirsiniz.

Tarih ve zaman bilgisi dahili olarak 64 bitlik bir sayı olarak saklanır, dolayısıyla mantıken kullanışlı tarihler (negatif yıllar dahil) desteklenir. Aralık, geçmişte yaklaşık 292 milyar yıldan, gelecekte yaklaşık 292 milyar yıla kadardır.

Bilginize: Bu işlevlerin sunucunuzun yerel zaman ayarlarına bağlı olarak işlem yaptığını lütfen aklınızdan çıkarmayın. Yaz saati uygulamasına dikkat edin. Örneğin, süre ekleme işlemi için $date += 7*24*60*60 değil $date = strtotime('+7 days', $date) kullanın. Ayrıca, bu işlevlerin artık yılları hesaba kattığını unutmayın.


## Komut Listesi
Komut |Anlamı|
------------|-------------|
[checkdate](http://php.net/checkdate)| Miladi tarihi doğrular
[date_add](http://php.net/date-add)| DateTime::add işlevinin takma adıdır
[date_create_from_format](http://php.net/date-create-from-format)| DateTime::createFromFormat işlevinin takma adıdır
[date_create_immutable_from_format](http://php.net/date-create-immutable-from-format)| Takma Adı: DateTimeImmutable::createFromFormat
[date_create_immutable](http://php.net/date-create_immutable)| Takma Adı: DateTimeImmutable::__construct
[date_create](http://php.net/date-create)| DateTime::__construct için bir takma ad
[date_date_set](http://php.net/date-date-set)| DateTime::setDate işlevinin takma adıdır
[date_default_timezone_get](http://php.net/date-default-timezone-get)| Betik içerisindeki tüm tarih/zaman işlevleri tarafından kullanılan öntanımlı zaman dilimini getirir
[date_default_timezone_set](http://php.net/date-default-timezone-set)| Betik içerisindeki tüm tarih/zaman işlevleri tarafından kullanılan öntanımlı zaman dilimini ayarlar
[date_diff](http://php.net/date-diff)| DateTime::diff işlevinin takma adıdır
[date_format](http://php.net/date-format)| DateTime::format işlevinin takma adıdır
[date_get_last_errors](http://php.net/date-get-last-errors)| DateTime::getLastErrors işlevinin takma adıdır
[date_interval_create_from_date_string](http://php.net/date-interval-create-from-date-string)| DateInterval::createFromDateString işlevinin takma adıdır
[date_interval_format](http://php.net/date-interval_format)| DateInterval::format işlevinin takma adıdır
[date_isodate_set](http://php.net/date-isodate-set)| DateTime::setISODate işlevinin takma adıdır
[date_modify](http://php.net/date-modify)| DateTime::modify işlevinin takma adıdır
[date_offset_get](http://php.net/date-offset-get)| DateTime::getOffset işlevinin takma adıdır
[date_parse_from_format](http://php.net/date-parse-from-format)| Get info about given date formatted according to the specified format
[date_parse](http://php.net/date-parse)| Verilen tarih hakkındaki ayrıntılı bilgiyi ilişkisel dizi olarak döndürür
[date_sub](http://php.net/date-sub)| DateTime::sub işlevinin takma adıdır
[date_sun_info](http://php.net/date-sun-info)| Güneşin doğuşu/batışı ve alacakaranlık başlangıcı/sonu hakkında bilgi içeren bir dizi döndürür
[date_sunrise](http://php.net/date-sunrise)| Belirtilen gün ve konum için şafak zamanını döndürür
[date_sunset](http://php.net/date-su-set)| Verilen gün ve konum için günbatımı zamanını döndürür
[date_time_set](http://php.net/date-time-set)| DateTime::setTime işlevinin takma adıdır
[date_timestamp_get](http://php.net/date-timestamp-get)| DateTime::getTimestamp işlevinin takma adıdır
[date_timestamp_set](http://php.net/date-timestamp-set)| DateTime::setTimestamp işlevinin takma adıdır
[date_timezone_get](http://php.net/date-timezone-get)| DateTime::getTimezone işlevinin takma adıdır
[date_timezone_set](http://php.net/date-timezone-set)| DateTime::setTimezone işlevinin takma adıdır
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
[timezone_abbreviations_list](http://php.net/timezone-abbreviations-list)| DateTimeZone::listAbbreviations işlevinin takma adıdır
[timezone_identifiers_list](http://php.net/timezone-identifiers-list)| DateTimeZone::listIdentifiers işlevinin takma adıdır
[timezone_location_get](http://php.net/timezone-location-get)| DateTimeZone::getLocation işlevinin takma adıdır
[timezone_name_from_abbr](http://php.net/timezone-name-from-abbr)| Kısaltmasından, zaman diliminin adını döndürür
[timezone_name_get](http://php.net/timezone-name-get)| DateTimeZone::getName işlevinin takma adıdır
[timezone_offset_get](http://php.net/timezone-offset-get)| DateTimeZone::getOffset işlevinin takma adıdır
[timezone_open](http://php.net/timezone-open)| DateTimeZone::__construct için takma ad
[timezone_transitions_get](http://php.net/timezone-transitions-get)| DateTimeZone::getTransitions işlevinin takma adıdır
[timezone_version_get](http://php.net/timezone-version-get)| Gets the version of the timezonedb
