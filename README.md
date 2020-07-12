# OpenAuth.dev Provider for XenForo 2

<div align=center>

![openauth-icon](https://user-images.githubusercontent.com/81188/87192541-f9fbe600-c2f6-11ea-9c8c-aebe7813d154.png)


### OpenAuth.dev Provider for XenForo 2

</div>

---

### Table of contents

* [About the project](#about-the-project)
* [Getting Started](#getting-started)
* [Configuration](#configuration)
* [Contributing](#contributing)
* [Versioning](#versioning)
* [Authors](#authors)
* [License](#license)

## About the project

WIP

## Prerequisites

You need:

- A XenForo installation (2.0.4 or newer)
- PHP (5.4 or newer)
- A free user account on [OpenAuth.dev](https://www.openauth.dev), which has been authorized as a developer

## Getting started

Download the latest release from the [releases section](https://github.com/openauth-dev/XF-OA-OpenAuth/releases) and upload it in your XenForo installation.

That's it!

## Configuration

Common to all vendors is that you have to create an "application" for the respective vendor, and get an ID and secret key, which must be entered into the settings (Administration > Setup > Connected Accounts) of your community.

To obtain a key pair from OpenAuth.dev, you need to [create an application](https://www.openauth.dev/developer/app-create/) first. After successful creation, find your newly created application in the list of [your applications](https://www.openauth.dev/developer/my-apps/) and click the "Edit" button. At the bottom of that page, you'll find the Client ID and the corresponding Client Secret. Copy both and paste them into the provider settings.

Under normal circumstances, you should now be able to register/log in using OpenAuth.dev.

## Contributing

There are many ways to help this open source project. Write tutorials, improve documentation, share bugs with others, make feature requests, or just write code. We look forward to every contribution.

## Versioning

We use [SemVer](http://semver.org/) for versioning. For available versions, see the [tags on this repository](https://github.com/openauth-dev/XF-OA-OpenAuth/tags).

## Authors

* **Sascha Greuel** - *Main development* - [SoftCreatR](https://github.com/SoftCreatR)

See also the list of [contributors](https://github.com/openauth-dev/XF-OA-OpenAuth/graphs/contributors) who participated in this project.

## License

This project is licensed under the LGPL-2.1 License - see the [LICENSE](LICENSE) file for details.
