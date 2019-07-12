## Tavsiye Edilen Sublimetext Eklentileri

Bu konuda şu sayfada yer alan [eklentiler ve bilgiler](http://labs.sahibinden.com/yazi/sublime-texti-etkin-kullanmak/) tavsiye edilir. Burada tekrar yazmaya gerek yok

[PackageControl](https://packagecontrol.io/browse/popular) sayfasında popüler eklentileri görebilirsiniz. İlave olarak şunları da sıralayabiliriz:

- sublime-text-git
- SublimeLinter-html-tidy
- SublimeLinter-php
- SublimeLinter-bandit
- SublimeLinter-annotations
- SideBarEnhancements
- Project PHP ClassBrowser
- Phpcs
- jQuery
- HTMLBeautify
- Emmet
- Color Highlighter
- BracketHighlighter

# Ayar İşlemleri


Preferences | Settings Menüsü içine şu ayarları kaydedebilirsiniz:
```
{
    "font_size": 15,
    "word_wrap": "false"
}
```

# Tuş Tanımları Yapılması (Key Binding)

SublimeText | Preferences | Key Bindings menüsünden girilerek yapılır:
```
[
    { "keys": ["f3"],          "command": "find_next" },
    { "keys": ["f2"],          "command": "next_view" },
    { "keys": ["f1"],          "command": "prev_view" },
    { "keys": ["alt+up"],      "command": "swap_line_up" },
    { "keys": ["alt+down"],    "command": "swap_line_down" },

    { "keys": ["ctrl+x"],       "command": "cut" },
    { "keys": ["ctrl+c"],       "command": "copy" },
    { "keys": ["ctrl+v"],       "command": "paste" },
    { "keys": ["ctrl+z"],       "command": "undo" },
    { "keys": ["ctrl+shift+z"], "command": "redo" },

    // Beginning/End of the current line.
    { "keys": ["home"],             "command": "move_to", "args": {"to": "bol"} },
    { "keys": ["end"],              "command": "move_to", "args": {"to": "eol"} },
    { "keys": ["shift+end"],        "command": "move_to", "args": {"to": "eol", "extend": true} },
    { "keys": ["shift+home"],       "command": "move_to", "args": {"to": "bol", "extend": true } },

    // Beginning/End of the document (using CMD).
    { "keys": ["super+home"],       "command": "move_to", "args": {"to": "bof"} },
    { "keys": ["super+end"],        "command": "move_to", "args": {"to": "eof"} },
    { "keys": ["super+shift+end"],  "command": "move_to", "args": {"to": "eof", "extend": true} },
    { "keys": ["super+shift+home"], "command": "move_to", "args": {"to": "bof", "extend": true } },

    // Beginning/End of the document (using CTRL, for when I have PC reflexes).
    { "keys": ["ctrl+home"],        "command": "move_to", "args": {"to": "bof"} },
    { "keys": ["ctrl+end"],         "command": "move_to", "args": {"to": "eof"} },
    { "keys": ["ctrl+shift+end"],   "command": "move_to", "args": {"to": "eof", "extend": true} },
    { "keys": ["ctrl+shift+home"],  "command": "move_to", "args": {"to": "bof", "extend": true } }
]
```
