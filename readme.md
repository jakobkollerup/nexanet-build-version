# Nexanet - Build Version 🚀
_A Laravel package to automatically inject build version headers into API responses._

![Laravel](https://img.shields.io/badge/Laravel-9.x%20%7C%2010.x%20%7C%2011.x-red.svg?style=flat-square)
![PHP](https://img.shields.io/badge/PHP-8.1%20%7C%208.2%20%7C%208.3%20%7C%208.4-blue.svg?style=flat-square)
![License](https://img.shields.io/badge/license-MIT-green.svg?style=flat-square)

## 📌 Overview
**Nexanet - Build Version** is a Laravel package that automatically adds version tracking headers (`X-Build-Version` and `X-Minimum-Build`) to API responses. This allows your frontend (e.g., Flutter app) to check if an update is required, eliminating the need for a separate API request.

---

## 📥 Installation
Require the package via Composer:
```
composer require nexanet/build-version
