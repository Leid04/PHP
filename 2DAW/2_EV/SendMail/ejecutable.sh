#!/bin/bash

sudo mkdir -m 700 /etc/mail/authinfo && cd /etc/mail/authinfo 

# Crear el archivo de autenticación para Gmail
sudo tee gmail-auth > /dev/null <<EOF
AuthInfo: "U:Denys" "I:denys.msi04@gmail.com" "P:pass123"
EOF

sudo makemap hash gmail-auth < gmail-auth

sudo tee -a /etc/mail/sendmail.mc > /dev/null <<EOF

define(\`SMART_HOST',\`[smtp.gmail.com]')dnl
define(\`RELAY_MAILER_ARGS', \`TCP \$h 587')dnl
define(\`ESMTP_MAILER_ARGS', \`TCP \$h 587')dnl
define(\`confAUTH_OPTIONS', \`A p')dnl
TRUST_AUTH_MECH(\`EXTERNAL DIGEST-MD5 CRAM-MD5 LOGIN PLAIN')dnl
define(\`confAUTH_MECHANISMS', \`EXTERNAL GSSAPI DIGEST-MD5 CRAM-MD5 LOGIN PLAIN')dnl
FEATURE(\`authinfo',\`hash -o /etc/mail/authinfo/gmail-auth')dnl
EOF


sudo make -C /etc/mail

sudo service sendmail restart

echo "Has configurado sendmail correctamente."