# MarkDown Kodlama

## MarkDown kodları

- [MarkDown kodları](https://guides.github.com/features/mastering-markdown/)
- [Daha Fazla MarkDown kodu](https://paperhive.org/help/markdown)

## MarkDown içinde emoji kullanımı :heart:
- [Kopyala-yapıştır ile Emoji Kullanın](https://getemoji.com/)
- [Git içinde kullanılabilecek emoji listesi](https://gist.github.com/rxaviers/7360908)

## MarkDown içine YouTube videosu yerleştirme
```
[![Video Adı Buraya](http://img.youtube.com/vi/VIDEONUNKODUBURAYA/0.jpg)](http://www.youtube.com/watch?v=VIDEONUNKODUBURAYA)
```
[![Candan Erçetin - Değişiyoruz](http://img.youtube.com/vi/2ecLnNmiS2k/0.jpg)](http://www.youtube.com/watch?v=2ecLnNmiS2k)

## Checkbox içeren liste yapımı
KAYNAK: https://github.com/atolye15/checklist/blob/master/checklists/configure-php-cs-fix.md
```

- [ ] Make sure PHP CS Fixer installed for the development environment only  
We needn't have CS Fixer on any other environment.

- [ ] Make sure to exclude auto-generated files  
Strongly recommended to exclude auto-generated files like `Migrations` for example. That kind of file may be risky to overwrite.

- [ ] Set correct CS rules based on project needs  
You can find all CS rules on [this](https://mlocati.github.io/php-cs-fixer-configurator) repository.

```

## .md dosyasının en üstüne tek satırlık tablo oluşturma
KAYNAK: https://github.com/atolye15/checklist/blob/master/checklists/configure-php-cs-fix.md
```
---
title: Configure PHP CS Fixer
category: Back-End
date: "2020-03-23"
tags: ['php', 'symfony', 'configure']
description: Sometimes, we mess up the basic rules of code style. So we need a friend to cover our back! With PHP we are using PHP CS Fixer by to configure it we follow the steps below.
---

```
