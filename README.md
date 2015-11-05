# validator

Easy and powerful validation livrary for PHP.

[![Build Status](https://travis-ci.org/thiagodp/validator.svg?branch=master)](https://travis-ci.org/thiagodp/validator)

Current [version](http://semver.org/): `0.4.0` (_not production-ready yet, but usable_)

### Available Rules

- [x] `required`
- [x] `min_length`
- [x] `max_length`
- [x] `length_range`
- [x] `min`
- [x] `max`
- [x] `range`
- [x] `regex`
- [x] `format`
- [x] custom (you can add others easily)

### Available Formats

- [x] `anything`
- [x] `name`
- [x] `word`
- [x] `alphanumeric`*
- [x] `alpha only`*
- [x] `ascii`*
- [x] `numeric`
- [x] `integer`
- [x] `price`
- [x] `tax`
- [x] `date_dmy`
- [x] `date_mdy`
- [x] `date_ymd`
- [x] `date_dmy_dotted`
- [x] `date_mdy_dotted`
- [x] `date_ymd_dotted`
- [x] `date_dmy_dashed`
- [x] `date_mdy_dashed`
- [x] `date_ymd_dashed`
- [x] `date`**
- [x] `time`**
- [x] `longtime`**
- [x] `datetime`**
- [x] `longdatetime`**
- [x] `email`
- [x] `http`
- [x] `url`
- [x] `ip`
- [x] `ipv4`
- [x] `ipv6`
- [x] custom (you can add others easily)

_\* Not fully tested, but it should work._

_** Not fully tested, and it will change soon._

### Message Replacements

- [x] **any rule** (i.e.: `{min_length}`, `{max}`, etc.): shows the rule value.
- [x] `{label}` shows the defined replacement for array keys or object field names.
- [x] `{value}` shows the value.

### More

- [x] Supports UTF-8 and other common formats (ISO-8859-1, Windows-1251, ASCII, etc.)
- [x] Error messages can be specified by locale.
- [x] Error messages can be specified at once, allowing, for example, reading them from a JSON file.
- [x] Formats can be specified by locale.
- [x] Formats can be specified at once, allowing, for example, reading them from a JSON file.
- [x] Formats can be specified without having to extend any class.
- [x] Rules can be specified without having to extend any class.
- [x] Classes use [fluent interface](https://en.wikipedia.org/wiki/Fluent_interface) (you type less).
- [ ] Builder classes available.
- [x] Can check a single value.
- [x] Can check a value array.
- [ ] Can check an object.
