<img src="http://give.cat/assets/img/give-cat-logo.png">
> "Making the internet a squishier place!"

<i>Give Cat is an attempt to bring happiness and joy to everyday life... One cat at a time.</i>

At the click of a button or the touch of a screen you can turn every image on a website into a picture of a cute cat!

# But... Why?
Well... Why <i>not</i>? Sometimes you're having a bad day and looking at your friends faces on Facebook just isn't helping the situation... Imagine how much better EVERYTHING would be if you had some cats. Right there. Instantly. With Give Cat, this is a reality!

-------------

## How does it work?
### Basically
When you add the Give Cat <a href="http://en.wikipedia.org/wiki/Bookmarklet" target="_blank">bookmarklet</a> to your browser use it on a website, we look at all of the images on the website and just replace them with a cat. There's some magic im between but that's the gist of it.

### Techie description
So... You're a glutton for punishment then! Ok... Give Cat is split into two major parts:

1. The API
2. The Bookmarklet
3. The CMS (this is a side note)

#### 1. The API
Give Cat has a basic API which generates a JSON array of Cats from a database. This means that the cats you see should change all of the time ! (No one wants to see the same cats over and over).

The API also stores the latest bookmarklet version and can be used to prompt the user when a new bookmarklet is released
> "We promise not to use the 'poke' system unless there is a MAJOR update or an update that addresses security issues"

#### 2. The Bookmarklet
The bookmarklet is the bit that most people see. It's the link you add to your browser that does all the EPIC magic stuff. It's split into two sections:

1. The loader
2. The extender

##### 1. The loader
The loader includes the basic bones of the bookmarklet - it's first job is to try and load the extender from the server. If the extender can't be loaded (either because of a 404 or because of <a href="http://en.wikipedia.org/wiki/Content_Security_Policy">Content Security Policy</a>) then it fallbacks to a reduced feature set with a limited number of images.

##### 2. The extender
The extender adds additional cat images from the server, does a version check and allows for functionality that would cause the bookmarklet to be too large to be used in most browsers. This load also means we can change a single file on the server and all of the users will be instantly updated to use the new bookmarklet stuff.

### 3. The CMS (this is a side note)
Give Cat has a small CMS that allows for new cat images to be uploaded to the server. It may also be the case that future bookmarklets can be updated directly for the CMS - this is not a definite though.

-------------

## How can I get involved?
I've got a list of enhancements that can be found on the <a href="http://github.com/mattrayner/Give.Cat/issues/">issues page</a>, they range form outstanding questions about device compatabilities to bugs and enhancements.

The best way to get involved is just to pull a fork and make some changes! I'm up for any improvements / features you've got.

##### Credit where credit's due
I've got to give credit for the original idea to <a href="http://heygirl.io">HeyGirl.io</a>, I took this original Ryan Gosling idea and morphed it into cats... Then I went a bit overboard and it became what you see here!

I use a couple of libraries in here too:
* <a href="https://github.com/serbanghita/Mobile-Detect/">Mobile Detect - PHP Library</a>
* <a href="https://gist.github.com/miguelxt/908143">SimpleImage - PHP Library</a>
* <a href="http://getbootstrap.com/">Twitter Bootstrap</a>