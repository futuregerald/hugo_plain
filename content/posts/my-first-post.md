---
title: "My First Post"
date: 2017-09-29T12:44:52-04:00
draft: true
---

      <script>
        // Initializing our Auth0Lock
      var lock = new Auth0Lock(
        'fhsE1c7DmBXTaeSaY3hYFsabiQo6N8Se',
        'futuregerald.auth0.com'
      );
      var options = {
        oidcConformant: true,
        auth: {
          audience: 'https://futuregerald.auth0.com/userinfo',
          redirectUrl: 'https://hugo-plain-testing.netlify.com/',
            responseType: 'code',
            params: {
              scope: 'openid email' // Learn about scopes: https://auth0.com/docs/scopes
            }
        }
      }
        </script>

    <script src="https://cdn.auth0.com/js/lock/10.x.y/lock.min.js"></script>