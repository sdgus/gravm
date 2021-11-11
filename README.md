# **GravM**ultisite is a true Grav multisite

	* Grav supports multisites in a special dir `user/env` only.
	* `GravM`:
		- supports GravM sites anywhere on disk, not in a `user/env` dir only
		- is a small Grav extension
		- does not affects Grav installation (except a single small fix)
		- is a site configurator, does not contain any source codes or classes
		- compatible with all Grav versions (tested up to 1.7.24)
	* `GravM` makes strict separation between host and site, namely:
		- host and site is absolutally different entities, host manages site an is a service for a site.
		- one host may control many sites.
		- CMS and host is the same, or host is a realization of CMS.
		- site is a configurator of pages (according to some host rules).
		- and so on...

# QuickStart

## Downloading a GravM Package

You can download a **ready-built** package from the [Downloads page on https://getlev.org/gravm](https://getlev.org/gravm/downloads)

# Contributing
We appreciate any contribution to GravM, whether it is related to bugs, grammar, or simply a suggestion or improvement! Please refer to the [Contributing guide](CONTRIBUTING.md) for more guidance on this topic.

## Security issues
If you discover a possible security issue related to Grav or one of its plugins, please email the core team at contact@getgrav.org and we'll address it as soon as possible.

# License

See [LICENSE](LICENSE)
