# REFACTOR
- La intención del refactor es actualizar las librerias ya instaladas a últimas versiones

# Pasos
- Configurar homestead
  - [Descarga de vagrantup para win x64](https://www.vagrantup.com/downloads.html) instalado
  ```js
  ioedu@mypc MINGW64 <some-path>
  $ vagrant
  Usage: vagrant [options] <command> [<args>]

  -v, --version                    Print the version and exit.
  -h, --help                       Print this help.

  Common commands:
  box             manages boxes: installation, removal, etc.
  cloud           manages everything related to Vagrant Cloud
  destroy         stops and deletes all traces of the vagrant machine
  global-status   outputs status Vagrant environments for this user
  halt            stops the vagrant machine
  help            shows the help for a subcommand
  init            initializes a new Vagrant environment by creating a Vagrantfile
  login
  package         packages a running vagrant environment into a box
  plugin          manages plugins: install, uninstall, update, etc.
  port            displays information about guest port mappings
  powershell      connects to machine via powershell remoting
  provision       provisions the vagrant machine
  push            deploys code in this environment to a configured destination
  rdp             connects to machine via RDP
  reload          restarts vagrant machine, loads new Vagrantfile configuration
  resume          resume a suspended vagrant machine
  snapshot        manages snapshots: saving, restoring, etc.
  ssh             connects to machine via SSH
  ssh-config      outputs OpenSSH valid configuration to connect to the machine
  status          outputs status of the vagrant machine
  suspend         suspends the machine
  up              starts and provisions the vagrant environment
  upload          upload to machine via communicator
  validate        validates the Vagrantfile
  version         prints current and latest Vagrant version
  winrm           executes commands on a machine via WinRM
  winrm-config    outputs WinRM configuration to connect to the machine

  For help on any individual command run `vagrant COMMAND -h`

  Additional subcommands are available, but are either more advanced
  or not commonly used. To see all subcommands, run the command
  `vagrant list-commands`.

  $ vagrant -v
  Vagrant 2.2.5
  ```
  - Instalación de **boxes** imágenes para la máquina virtual
  - las imágenes de vagrant las llamamos **boxes** (cajas)
  - `vagrant box add laravel/homestead`
    - ![descarga del box laravel/homestead](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/664x290/75decb2bc198963af0b4c01ee0619bbb/image.png)
    - ![fin descarga del box](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/656x339/94dabb3da66a82fcddf8313005d320dc/image.png)
  - Instalación de **configuración de Homestead**
  - Descarga de repo: `git clone https://github.com/laravel/homestead.git`
  - ![instalar configuración homestead](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/558x144/8f179eeb00450296248c194232136513/image.png)
  - se instala en: `C:/Users/<user>/.vagrant.d/boxes/laravel-VAGRANTSLASH-homestead/8.1.0/virtualbox`
    - ![.vagrant/boxex/homestead](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/964x202/359e3492449ec8771a6d15baec80ff93/image.png)
  - Con windows hay que entrar en `<ruta>/vagrant/boxes/homestead` por cmd y ejecutar `init.bat`
  - Este comando crea unos ficheros de configuración en especial **Homestead.yaml**
  ```
  E:\vagrant\boxes\homestead>init.bat
    1 archivo(s) copiado(s). Homestead.yaml
    1 archivo(s) copiado(s). after.sh
    1 archivo(s) copiado(s). aliases
  Homestead initialized!
  ```
  - `vagrant up`
  - Despues de configurar **homestead.yaml** me da este 
  - **error:** Check your Homestead.yaml (or Homestead.json) file, the path to your private key does not exist.
    - Creamos el fichero `id_rsa` en `c:\usuarios\<usuario>\.ssh\` 
    - `touch ~/.ssh/id_rsa`
  - `vagrant up` ...ahora parece que va
    - La primera vez ejecutará el aprovisionamiento
    ```js
    E:\vagrant\boxes\homestead>vagrant up
    Bringing machine 'homestead' up with 'virtualbox' provider...
    ==> homestead: Importing base box 'laravel/homestead'...
    ==> homestead: Matching MAC address for NAT networking...
    ==> homestead: Checking if box 'laravel/homestead' version '8.1.0' is up to date...
    ==> homestead: Setting the name of the VM: homestead
    Vagrant is currently configured to create VirtualBox synced folders with
    the `SharedFoldersEnableSymlinksCreate` option enabled. If the Vagrant  
    guest is not trusted, you may want to disable this option. For more     
    information on this option, please refer to the VirtualBox manual:      
    https://www.virtualbox.org/manual/ch04.html#sharedfolders
    This option can be disabled globally with an environment variable:      
    VAGRANT_DISABLE_VBOXSYMLINKCREATE=1
    or on a per folder basis within the Vagrantfile:
    config.vm.synced_folder '/host/path', '/guest/path', SharedFoldersEnableSymlinksCreate: false
    ==> homestead: Clearing any previously set network interfaces...
    ==> homestead: Preparing network interfaces based on configuration...
        homestead: Adapter 1: nat
        homestead: Adapter 2: hostonly
    ==> homestead: Forwarding ports...
        homestead: 80 (guest) => 8000 (host) (adapter 1)
        homestead: 443 (guest) => 44300 (host) (adapter 1)
        homestead: 3306 (guest) => 33060 (host) (adapter 1)
        homestead: 4040 (guest) => 4040 (host) (adapter 1)
        homestead: 5432 (guest) => 54320 (host) (adapter 1)
        homestead: 8025 (guest) => 8025 (host) (adapter 1)
        homestead: 9600 (guest) => 9600 (host) (adapter 1)
        homestead: 27017 (guest) => 27017 (host) (adapter 1)
        homestead: 22 (guest) => 2222 (host) (adapter 1)
    ==> homestead: Running 'pre-boot' VM customizations...
    ==> homestead: Booting VM...
    ==> homestead: Waiting for machine to boot. This may take a few minutes...
        homestead: SSH address: 127.0.0.1:2222
        homestead: SSH username: vagrant
        homestead: SSH auth method: private key
        homestead: Warning: Connection aborted. Retrying...
        homestead: 
        homestead: Vagrant insecure key detected. Vagrant will automatically replace
        homestead: this with a newly generated keypair for better security.
        homestead: 
        homestead: Inserting generated public key within guest...
        homestead: Removing insecure key from the guest if it's present...
        homestead: Key inserted! Disconnecting and reconnecting using new SSH key...
    ==> homestead: Machine booted and ready!
    ==> homestead: Checking for guest additions in VM...
    ==> homestead: Setting hostname...
    ==> homestead: Configuring and enabling network interfaces...
    ==> homestead: Mounting shared folders...
        homestead: /vagrant => E:/vagrant/boxes/homestead
    ==> homestead: Running provisioner: file...
        homestead: E:/vagrant/boxes/homestead/aliases => /tmp/bash_aliases
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
        homestead: Unable to mount one of your folders. Please check your folders in Homestead.yaml
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
        homestead: Ignoring feature: mariadb because it is set to false
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
        homestead: Ignoring feature: ohmyzsh because it is set to false
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
        homestead: Ignoring feature: webdriver because it is set to false
    ==> homestead: Running provisioner: shell...
        homestead: Running: C:/Users/<user>/AppData/Local/Temp/vagrant-shell20190915-7524-pq0str.sh
    ==> homestead: Running provisioner: shell...
        homestead: Running: C:/Users/<user>/AppData/Local/Temp/vagrant-shell20190915-7524-1euzhno.sh
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating Certificate: homestead.test
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating Site: homestead.test
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
    ==> homestead: Running provisioner: shell...
        homestead: Running: C:/Users/<user>/AppData/Local/Temp/vagrant-shell20190915-7524-kmqscj.sh
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Checking for old Schedule
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating Certificate: platziphp.loc
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating Site: platziphp.loc
    ==> homestead: Running provisioner: shell...
        homestead: Running: inline script
    ==> homestead: Running provisioner: shell...
        homestead: Running: C:/Users/<user>/AppData/Local/Temp/vagrant-shell20190915-7524-1b3qaxe.sh
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Checking for old Schedule
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Clear Variables
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Restarting Cron
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Restarting Nginx
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating MySQL Database: homestead
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating Postgres Database: homestead
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating MySQL Database: cursophp
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Creating Postgres Database: cursophp
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Update Composer
        homestead: You are already using composer version 1.9.0 (stable channel).
    ==> homestead: Running provisioner: shell...
        homestead: Running: C:/Users/<user>/AppData/Local/Temp/vagrant-shell20190915-7524-1np5bb1.sh
    ==> homestead: Running provisioner: shell...
        homestead: Running: script: Update motd
    ==> homestead: Running provisioner: shell...
        homestead: Running: C:/Users/<user>/AppData/Local/Temp/vagrant-shell20190915-7524-uz1jeo.sh
    ```
  - configuramos el `/etc/hosts`
    - 192.168.10.10 platziphp.loc
  - navegamos a la pag: http://platziphp.loc
    - **error:** No input file specified.
    - ![No input file specified.](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/292x105/2a5ff7b44d96b36e1e2ed0390859417a/image.png)
    - creo que la solución pasa por ~instalar los paquetes de composer, para esto hay que entrar a la maquina usando ssh~ No, la solución era corregir la ruta de mapeo de carpetas de homestead
  - conectando por ssh:
    - `$ vagrant global-status` comprobamos las maquinas en ejecución
    - ![`$ vagrant global-status`](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/537x81/f6f9d973c819d636ed60bad514b1c0a8/image.png)
    - con el id conectamos así:`vagrant ssh 3e46cc1`
    - ![resultado de vagrant ssh](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/554x294/94abd9e13da01963fcd3e9a20a86699d/image.png)
    - **error:** WTF! una vez dentro de vegrant no tengo la carpeta mapeada correctamente :s 
      - **solución:** He tenido que mapear con estilo de ruta windows: e:\...\prj_platziphp y ejecutar `vagrant reload`
  - instalando paquetes de composer:
    - `cd code;composer install`
  - Ahora ya entra al sitio pero muestra este error:
    ```sql
    SQLSTATE[42S02]: Base table or view not found: 1146 Table 'cursophp.jobs' doesn't exist (SQL: select * from `jobs` where `jobs`.`deleted_at` is null)
    ```
    - ![error base de datos](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/1067x259/22b96509942c68dfe90148cfaad0e417/image.png)
    - Conecto a la bd:
    - ![conexion mysql](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/483x304/23f9448c7b9bcd4a0db17a8ba81d1497/image.png)
    ```js
    //phinx.yml
    development:
      adapter: mysql
      host: localhost
      name: cursophp
      user: homestead
      pass: secret
      port: 3306
      charset: utf8
    //.env
    DB_DRIVER=mysql
    DB_HOST=localhost
    DB_NAME=cursophp
    DB_USER=homestead
    DB_PASS=secret    
    ```
  - Aplicamos migraciones:
    - `vagrant@homestead:~/code$ php ./vendor/robmorgan/phinx/bin/phinx migrate`
    - tengo que estar en la raiz. No vale `code$ php ./vendor/bin/phinx migrate` dice que no se reconoce el comando o devuelve el **contenido** del fichero phinx
    - ![resultado comando](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/596x350/214384dd15253866cbe195e554a438b7/image.png)
  - Resultado:
    - ![img resultado final](https://trello-attachments.s3.amazonaws.com/5d7e2d2ed198de4622e527f7/676x655/44951f885445f9f6c3d2d89b399ee09d/image.png)
- Crear usuario
  - `php console.php app:create-user eaf@eaf.com`
  - la contraseña según el comando de creación: **123456**
  ```php
  $user->email = $input->getArgument('email');
  $user->password = password_hash('123456', PASSWORD_DEFAULT);
  $user->save();
  ```

# 28/09/2019 Pauso el refactor hasta entender el Inyector de dependencias