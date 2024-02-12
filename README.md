# dwd-webcam

A [mastodon bot][follow] that posts pictures from the [German Weather service (Deutscher Wetterdienst DWD)](https://www.dwd.de/EN/Home/home_node.html) [webcams](https://opendata.dwd.de/weather/webcam/).

(This project is not affiliated with DWD)

[![Run][gh-action-badge]][gh-action]
[![License][license-badge]][license]
[![Follow @dwil][follow-badge]][follow]

[gh-action-badge]: https://img.shields.io/github/actions/workflow/status/php-tootbot/dwd-webcam/run.yml?branch=main&logo=github
[gh-action]: https://github.com/php-tootbot/dwd-webcam/actions/workflows/run.yml?query=branch%3Amain
[license-badge]: https://img.shields.io/badge/license-MIT-green.svg
[license]: https://github.com/php-tootbot/dwil/blob/main/LICENSE-MIT
[follow-badge]: https://img.shields.io/mastodon/follow/110734582408647546?domain=https%3A%2F%2Fbotsin.space&logo=mastodon&style=flat
[follow]: https://botsin.space/@dwd_webcam


## Related projects
- [php-tootbot/php-tootbot](https://github.com/php-tootbot/php-tootbot)
	- [php-tootbot/tootbot-template](https://github.com/php-tootbot/tootbot-template)
- [chillerlan/php-httpinterface](https://github.com/chillerlan/php-httpinterface)
	- [chillerlan/php-http-message-utils](https://github.com/chillerlan/php-http-message-utils)
	- [chillerlan/php-oauth-core](https://github.com/chillerlan/php-oauth-core)
		- [chillerlan/php-oauth-providers](https://github.com/chillerlan/php-oauth-providers)
- [chillerlan/php-settings-container](https://github.com/chillerlan/php-settings-container)
- [chillerlan/php-dotenv](https://github.com/chillerlan/php-dotenv)


## Image copyright

https://www.dwd.de/EN/service/copyright/copyright_node.html

> All information on the web pages of the DWD is protected by copyright.
>
> As laid down in the Ordinance Setting the Terms of Use for the Provision of Federal Spatial Data (GeoNutzV, https://www.bmu.de/fileadmin/Daten_BMU/Download_PDF/Strategien_Bilanzen_Gesetze/130309_geonutzv_bgbi_englisch_bf.pdf), all spatial data and spatial data services available for free access may be used without any restrictions provided that the source is acknowledged. When speaking of spatial data, this also includes any location-related weather and climate information presented on our open web pages.
>
> Any other content presented on DWD web pages, in whole or extracts thereof, may be reproduced, altered, distributed, used or publicly presented only if expressly permitted by the DWD.
>
> Rules and templates for acknowledging the DWD as source can be found here: https://www.dwd.de/EN/service/copyright/templates_dwd_as_source.html?nn=450678
>
> Wherever the DWD uses data or information from third parties to generate new products and services, the DWD assures that it holds all necessary rights to do so.
>
> Source of basic geospatial data: Surveying authorities of the Länder and Federal Agency for Cartography and Geodesy (BKG) (http://www.bkg.bund.de)
>
> Sources of satellite data: EUMETSAT (http://www.eumetsat.int), NOAA (http://www.noaa.gov)


## Disclaimer

WE'RE TOTALLY NOT RUNNING A PRODUCTION-LIKE ENVIRONMENT ON GITHUB.<br>
WE'RE RUNNING A TEST AND POST THE RESULT TO AN EXTERNAL WEBSITE.<br>
WE'RE JUST LOOKING IF THE SCRIPT STILL WORKS ON A SCHEDULE N TIMES A DAY.
