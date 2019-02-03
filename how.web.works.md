# How Web Works with Dialog

## Let's go!

```Browser:``` "Ok, so, I have a user requesting this address: www.cnn.com. I figure since there are no slashes or anything, this is a direct request of a main page. There was also no protocol or port defined, so I'll assume it's HTTP and going to port 80... oh well, first things first. Hey DNS, pal, wake up! Where is this www.cnn.com hiding at?"

```DNS:``` "Right... wait a sec, I'll ask the ISP servers. Ok, it looks like 157.166.226.25."

```Browser:``` "Ok. Internet Protocol Suite, your turn! Call 157.166.226.25, please. Send them this HTTP header. It's asking for the basic structure and content of their main page so I know what else to fetch... oh well, not that you'd care about this I guess. "

```TCP/IP:``` "What do you mean my turn? Like I wasn't just working my back off right there for the DNS? God, what does it take to get a bit of appreciation here..."

```Browser:``` ...

```TCP/IP:``` "Yeah, yeah... Connecting... I'll just ask the gateway to forward it. You know, it isn't all that easy, I'll have to divide your pretty request there into multiple parts so it reaches the end, and assemble any stuff they send back from all the thousands of packages I get... ah, right, you don't care. Figures."

## Meanwhile, at the CNN headquarters, a message finally ends up at the door of the Web Server.

```CNN Web Server:``` "Nzhôô! A customer! He wants news! The Front Page! How about it?"

```CNN Server Side Script Engine:``` "Right, will do! Front page, right?"

```CNN Database Server:``` "Yey! Work for me! What content do you need?"

```CNN Server Side Script Engine:``` "... um, sorry DB, I have a copy of front page right here in my cache, no need to compile anything. But hey, take this user ID and store it, I'll send it to the customer too, so we know who we're talking to later on."

```CNN Database Server:``` "Yey!"

## Back at the user's computer...

```TCP/IP:``` "Ooookay, here comes the reply. Oh boy, why do I have a feeling this'll be a big one..."

```Browser:``` "Uh, wow... this has all sorts of javascript code... bunch of images, couple of forms... Right, this'll take a while to render. Better get to it. Hey, IP system, there's a bunch more stuff you'll need to get. Let's see I need a few stylesheets from i.cdn.turner.com - via HTTP and ask for the file /cnn/.element/css/2.0/common.css. And then get some of those scripts at i.cdn.turner.com too, I'm counting six so far..."

```TCP/IP:``` "I get the picture. Just give me the server addresses and all that. And wrap that file stuff within the HTTP request, I don't want to deal with it."

```DNS:``` "Checking the i.cdn.turner.com... hey, bit of trivia, it's actually called cdn.cnn.com.c.footprint.net. IP is 4.23.41.126"

```Browser:``` "Sure, sure... wait a sec, this'll take a few nsec to process, I'm trying to understand all this script..."

```TCP/IP:``` "Hey, here's the CSS you asked for. Oh, and... yeah, those additional scripts also just came back."

```Browser:``` "Whew, there's more... some sort of video ad!"

```TCP/IP:``` "Oh boy, what fun that sounds like..."

```Browser:``` "There's all sorts of images too! And this CSS looks a bit nasty... right, so if that part goes there, and has this line at the top... how on earth would that fit anymore... no, I'll have to stretch this a bit to make it... Oh, but that other CSS file overrides that rule... Well, this one ain't going to be an easy piece to render, that's for sure!"

```TCP/IP:``` "Ok, ok, stop distracting me for a sec, there's a lot to do here still."

```Browser:``` "User, here's a small progress report for you. Sorry, this all might take a few secs, there's like 140 different elements to load, and going at 16 so far."

## One or two seconds later...

```TCP/IP:``` "Ok, that should be all. Hey, listen... sorry I snapped at you earlier, you managing there? This sure seems like quite the load for you too."

```Browser:``` "Phew, yeah, it's all these websites nowdays, they sure don't make it easy for you. Well, I'll manage. It's what I'm here for."

```TCP/IP:``` "I guess it's quite heavy for all of us these days... oh, stop gloating there DNS!"

```Browser:``` "Hey user! The website's ready - go get your news!"


# Faydalı Linkler

## Detaylı Anlatım: How web works?
https://github.com/vasanthk/how-web-works

## What happens when you type google.com into your browser and press enter
https://github.com/alex/what-happens-when
