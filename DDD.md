# [Youtube - Domain Driven Design (DDD) - Diseño guiado por el dominio - Evento de Endava by 
Yoelvis Mulen](https://www.youtube.com/watch?v=Mn4TFBXa_2g)
### [Repo original](https://github.com/ymulenll/OnlineStore/tree/develop)

## [Sumario](https://youtu.be/Mn4TFBXa_2g?t=46)
- ¿Qué es el diseño guiado por el dominio?
- ¿Cómo crear un modelo aislado y reutilizable que realmente represente el negocio?
- ¿Cómo manejar la complejidad y los cambios en los requerimientos?

## [Historia](https://youtu.be/Mn4TFBXa_2g?t=76)
- 2003 Libro Domain Driven Design by
  - [Eric Evans](https://twitter.com/ericevans0)
  - ![libro Eric Evans](https://trello-attachments.s3.amazonaws.com/5d85fbb425740b29d72cedbb/377x500/ed7165248d59e52348b56ae78544d3f2/image.png)

## [¿Qué es el diseño guiado por el dominio?](https://youtu.be/Mn4TFBXa_2g?t=146)
  - **Dominio:**
    - Viene siendo el campo o area de la vida real que queremos llevar al diseño del software
    - Por ejemplo, una tienda virtual, todo ese negocio vendría a ser el dominio que vamos a desarrollar en software.
  - **Diseño guiado por dominio**
    - Enfoque del desarrollo centrado en el dominio
    - La lógica de negocio que se va a desarrollar
    - [**¿Dónde aplicarlo?**](https://youtu.be/Mn4TFBXa_2g?t=226)
      - ~Aplicaciones simples~
        - App a corto plazo (fastfood app)
      - ~Complejidad técnica~
        - Si hay una técnología especifica 
      - Complejidad en la lógica de negocio (App empresariales)
        - Un banco
    - [**Entender necesidades**](https://youtu.be/Mn4TFBXa_2g?t=312)
      - Las personas **expertos del dominio** nos marcan los requistos
      - Para esta comunicación entre **expertos** y **desarrolladores** se define un **lenguaje ubicuo**
      - Lenguaje que está en todas partes
        - Expertos llaman a una acción: compra de producto
        - Desarrolladores: Adquisición de recursos
        - El término definitivo para este proceso sería: **compra de producto**
        - [Este término lo usaríamos en todos lados:](https://youtu.be/Mn4TFBXa_2g?t=403)
          - ![donde se usaría](https://trello-attachments.s3.amazonaws.com/5d85fbb425740b29d72cedbb/875x540/ca612d1c4dc2f4c3a911b19aacf20c7d/image.png)
          - Conversaciones
          - Documentación
          - Código fuente, variables, métodos
        - Es un lenguaje evolutivo
    - [Subdominios](https://youtu.be/Mn4TFBXa_2g?t=447)
      - Dividir el problema en partes más pequeñas
        - ![Sub-dominios](https://trello-attachments.s3.amazonaws.com/5d85fbb425740b29d72cedbb/849x532/0359fc059363109a5d9ea800e15a28fb/image.png)
        - Ordenes, Catálogo, Envíos
      - [Contextos delimitados - Bounded contexts](https://youtu.be/Mn4TFBXa_2g?t=470)
        - ![bounded contexts](https://trello-attachments.s3.amazonaws.com/5d85fbb425740b29d72cedbb/823x481/31a8aac13cff04c02b6fc1ab25b0adb8/image.png)
      - Subdominio: describe el sub-problema
      - Bounded Context: aporta solución a ese sub-problema
  
  ## [Parte estratégica](https://youtu.be/Mn4TFBXa_2g?t=556)
  - La anterior fué la parte analítica
  - **Asignar arquitecturas**
    - ![asignar arquitecturas](https://trello-attachments.s3.amazonaws.com/5d85fbb425740b29d72cedbb/918x454/5318571a8a1c2657a3d29a3ea4d25cc0/image.png)
    - Para el catálogo concluimos que no necesitamos mayor operación que un simple CRUD
    - Para el shipping se usará una API
    - Para el Ordering se aplicará el patrón **Domain Model** la parte compleja (todo lo que se hace en amazon por ejemplo)
      - ![arquitecturas definidas](https://trello-attachments.s3.amazonaws.com/5d85fbb425740b29d72cedbb/821x492/0254df2b3b2a6555b30ff545cbafa1ea/image.png)
    - [Arquitectura en capas](https://youtu.be/Mn4TFBXa_2g?t=697)
      - Qué es el patrón **Domain Model**
      - 

      
    
      

   