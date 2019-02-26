# Git Projelerinde Media Temizliği

Projelerdeki ses, video ve resim dosyalarının silinmesi ve git arsivinden temizlenmesinin nasıl yapılacağı bu sayfada açıklanmalı


## Bu işin nasıl yapılabileceği ile ilgili araştırma sonuçları

#java -jar ~/bfg.jar --strip-blobs-bigger-than 500K PHP-Egitimi

java -jar ~/bfg.jar --delete-files "*.jpg" PHP-Egitimi

git reflog expire --expire=now --all && git gc --prune=now --aggressive

git push


--------

http://varunksaini.com/remove-big-file-from-git-repo/

https://rtyley.github.io/bfg-repo-cleaner/

https://github.com/IBM/BluePic/wiki/Using-BFG-Repo-Cleaner-tool-to-remove-sensitive-files-from-your-git-repo

https://www.nicoespeon.com/en/2014/04/clean-git-repo-like-a-boss/
