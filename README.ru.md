# **GravM**ultisite - это настоящий мультисайт Grav

	* `GravM` - это реакция на слабую и ограниченную реализацию мультисайта в Grav.
	* `GravM`:
		- позволяет создавать сайты GravM где угодно на диске, а не только в дире Grav
		- является расширением Grav, причем небольшим и достаточно простым
		- не затрагивает сам Grav (кроме одного небольшого фикса)
		- является только конфигуратором сайта, не имеет никаких своих кодов или классов
		- совместим со всеми версиями Grav (проверено до 1.7.24)
	* `GravM` привел к строгому разделению на host и site, а именно:
		- host и site - `абсолютно разные сущности`, хост управляет сайтом и является сервисом для сайта.
		- хост один, а сайтов много.
		- CMS и хост - это или одно и то же, или хост является реализацией CMS.
		- сайт - это конфигуратор страниц (по правилам хоста).
		- и т.д. и т.п...

# QuickStart

## Downloading a GravM Package

You can download a **ready-built** package from the [Downloads page on https://getlev.org/gravm](https://getlev.org/gravm/downloads)

# Contributing
We appreciate any contribution to GravM, whether it is related to bugs, grammar, or simply a suggestion or improvement! Please refer to the [Contributing guide](CONTRIBUTING.md) for more guidance on this topic.

## Security issues
If you discover a possible security issue related to Grav or one of its plugins, please email the core team at contact@getgrav.org and we'll address it as soon as possible.

# License

See [LICENSE](LICENSE)
