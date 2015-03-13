# FeedsTheSpammers
How to feed a spammer until it explodes to death

When a spammer visits your site to harvest your emails, it basically records anything that “looks” like an email address. For example, “anything@anywhere.com” contains all the requisite parts, so it’s considered to be an email address. And harvesters record as many as they can get to add to their scummy mailing lists

What this PHP script does is automatically generate thousands of random email addresses whenever it is accessed. So visiting the file in your browser, you’ll see the same thing that a harvester will see: thousands of email addresses ripe for the plucking. Only these emails are bogus, leading the spammers on a wild goose chase that consumes their resources, drains their bandwidth, dilutes their potency, and ultimately costs them time and precious money. Punishment fits the crime is an understatement.

## Installation

We begin by installing Composer.
```
$ curl -sS https://getcomposer.org/installer | php
$ mv composer.phar /usr/local/bin/composer
```
And we execute the following command that will download all the dependencies of our application.
```
$ git clone https://github.com/rmeja/FeedsTheSpammers.git myProject
$ cd /path/to/my/project/
$ composer install
```

Things to edit: the number of emails to generate. Other aspects may be fine-tuned as well. Optionally you can include a line in your site’s robots.txt file that explicitly forbids access of your email trap:
```
# robots.txt
User-agent: *
Disallow: /emails.php
```


shamefully inspired by http://wp-mix.com/infinite-loop-trap-spammers/
