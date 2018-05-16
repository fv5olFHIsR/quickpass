# quickpass
A very small executable written in PHP and compiled for Windows with Phalanger. It generates passwords (or random strings) locally.
The passwords can be saved to a .pass file if you enter a name (not at all required, but it is neat if you often generate passwords for different things)


QuickPass by KiRiCh

Advantages:

- Creates Strong Passwords of 24 chars by default

- Passwords are NEVER sent over the network

- Automatically copies the generated password to CLIPBOARD

- Incredibly simple - 50 lines of code, nothing up the developer's sleeve, can be reviewed in 2 min

- Optionally save the pass to a Vault/passname.pass file (if you enter a name)

- Super Fast - less than 2 seconds to have a fresh password in your clipboard!


Usage:

- If you are on Windows and don't have php, just download the compiled /bin/quickpass.exe and use it (9Kb)

- If you are on Windows and have php you can also download quickpass.php and execute in cmd - c:\qp\php quickpass.php

- If you are on anything else you have to use PHP to execute or compile for your target os with whatever, BUT MIND THE COPY TO CLIPBOARD EXEC it will not run, so modify accordingly as well.

If you see anything that feels wrong in the code, please let me know.


This Branch commit has additional comments

This is the lean.mean under 50 liner! :)