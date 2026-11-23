# TYPO3 Extension `t3entw_slider`

## 1 Features

* Based on extbase & fluid, implementing best practices from TYPO3 CMS
* A simple responsive Bootstrap slider with fields like title, link, sub-title, description, image.

## 2 Usage

### 2.1 Installation

#### Installation using Composer

The recommended way to install the extension is using [Composer][2].

Run the following command within your Composer based TYPO3 project:

```
composer require t3entw/slider
```
OR
```
composer require t3entw/slider 14.0.x-dev
```
OR
```
composer require t3entw/slider dev-master
```

#### Installation as extension from TYPO3 Extension Repository (TER)

Download and install the [extension][3] with the extension manager module.

### 2.2 Minimal setup

1) Include the static TypoScript of the extension.
2) Create some slider records on a sysfolder.
3) Insert a plugin on a page and select sysfolders in Record Storage Page to display from specific sysfolders or keet it blank for all .

## 3 Help supporting further development

**Why?** The Simple responsive Bootstrap slider extension is a slider extension to grow the TYPO3 community.

**How?**  There are multiple ways to support the further development. By outsourcing some additional tasks to https://TYPO3Entwentwicklung.com

## 4 Administration corner

### 4.1 Versions and support

| Simple responsive bootstrap slider| TYPO3       | PHP       | Support / Development                   |
| --------------------------------- | ----------- | ----------|---------------------------------------- |
| 14.x                              | 14.0 - 14.x | 8.2 - 8.4 | features, bugfixes, security updates    |

### 4.2 Changelog

### 4.3 Release Management

Simple responsive bootstrap slider releases it's first version!

### 4.4 Contribution

**Pull Requests** are gladly welcome! Nevertheless please don't forget to add an issue and connect it to your pull requests. This
is very helpful to understand what kind of issue the **PR** is going to solve.

Bugfixes: Please describe what kind of bug your fix solve and give us feedback how to reproduce the issue. We're going
to accept only bugfixes if we can reproduce the issue.


[1]: https://docs.typo3.org/typo3cms/extensions/t3entw_slider/
[2]: https://github.com/nirmalyamondal/t3entw_slider/
[3]: https://getcomposer.org/
