# v2.0.1
## 04/30/2026

1. [](#improved)
    * Updated bundled `clue/stream-filter` to v1.5.0+ so its functions are guarded with `function_exists()` — fixes `Cannot redeclare Clue\StreamFilter\append()` fatal when running alongside `mailersend` (or any other plugin with a newer copy of clue/stream-filter).

# v2.0.0
## 12/07/2018

1. [](#improved)
    * Updated GitHub API to latest 2.10 release

# v1.3.0
## 05/03/2016

1. [](#improved)
    * Updated GitHub API library to latest 1.6.0 release
    * Add `github` object directly to Twig rather than via another event

# v1.2.2
## 12/11/2015

1. [](#new)
    * New configuration settings for authentication, allowing to get past the 60/hr guest limit in favor of the 5000/hr authenticated limit
    * New `paginator` class available that allows retrieving past the first page. GitHub API defaults to 30 items per page

# v1.2.1
## 05/04/2015

1. [](#improved)
    * Updated the `php-github-api` library to latest version

# v1.2.0
## 01/09/2015

2. [](#improved)
    * NOTE: BREAKING CHANGE: Moved templates into `partials/` subfolder for consistency.

# v1.1.0
## 11/30/2014

1. [](#new)
    * ChangeLog started...
