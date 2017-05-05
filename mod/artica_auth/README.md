# ICT4Life Interfaces Elgg Authorization-Authentication

This plugin allow to create Elgg system user account and login through ICT4Life Interfaces

## Instalation

- Modify engine/classes/Elgg/ActionService.php in order to add an exception to the new actions
  ```
  $exceptions = array(
                      'admin/plugins/disable',
                      'logout',
                      'file/download',
                      'artica/login',
                      'artica/register'
              );
   ```
- Uncompress zip file into /pathtowwwroot/mod
- Activate plugin with admin user http://elglocation/admin/plugins
- Restart Apache Server

## Usage

### POST action/artica/register

This action allow to register a new user account.
```
{
  "username":"test",
  "password":"123asd-asdas15-asda14-123as1",
  "email":"test@test.com",
  "name":"test"
}
```

### POST action/artica/login

This action make a login into Elgg system.
```
{
  "username":"test",
  "password":"123asd-asdas15-asda14-123as1",
}
```

### GET action/artica/login
This action make a login into Elgg system.

http://elglocation/action/artica/login?username=asdasd&&password=023iads91283kjasd9


