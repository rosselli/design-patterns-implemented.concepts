# Design Patterns: Resume



+ **Command** _(Behavioral)_ <br>It encapsulates the invocation and decouples.<br>**_[client, invoker, command, receiver, undo]_**.



## Factories
+ **Abstract Factory** _(Creational)_ <br> .<br>**_[]_**
+ **Factory Method** _(Creational)_ <br> .<br>**_[]_**
+ **SimpleFactory** _(Creational)_ <br> .<br>**_[]_**
+ **StaticFactory** _(Creational)_ <br> .<br>**_[]_**
+ **Builder** _(Creational)_ <br>It creates different flavors of an object while avoiding constructor pollution.<br>**_[fluent interface, factory]_**.

| | OK | Resume
--- | --- | :---
**Behavioral:** Chain of Responsibility | OK | It helps building a chain of objects. Request enters from one end and keeps going from object to object till it finds the suitable handler.<br>**_[next, switch statement]_**.
**Behavioral:** Command | | It encapsulates the invocation and decouples.<br>**_[client, invoker, command, receiver, undo]_**.
**Behavioral:** Iterator | OK | It creates an **object iterable** and to make it appear **like a collection of objects**.<br>**_[collection, foreach]_**.
**Behavioral:** Mediator | OK | It controls the interaction between two objects. They don't need to have the knowledge of each other's implementation.<br>**_[middleware]_**. 
**Behavioral:** Memento | OK | It captures and stores the current state of an object, in a manner that it can be restored later.<br>**_[undo-redo, state, clone]_**. 
**Behavioral:** NullObject | OK | It returns objects that won't never be null, eliminating the conditional is_null() check.<br>**_[is_null, never]_**.
**Behavioral:** Observer | OK | An object, called the subject, maintains a list of its dependents (observers), and notifies them automatically of any state changes.<br>**_[state, notification, observer, subject]_**
**Behavioral:** Specification | OK | It builds a clear specification of business rules, where objects can be checked against.<br>**_[isSatisfiedBy, and-or-not]_**. 
**Behavioral:** State | OK | It lets you change the behavior of a class when the state changes.<br>**_[state, created-payed-shipped-done]_**. 
**Behavioral:** Strategy | OK | It allows you to switch the algorithm or strategy based upon the situation.<br>**_[filter, by asc-desc, by id-date]_**.  
**Behavioral:** Template Method | OK | It defines the skeleton of how a certain algorithm could be performed, but defers the implementation of those steps to the children classes.<br>**_[parent-child template, abstract class, builder, fluent interface)_**. 
**Behavioral:** Visitor | | It adds further operations to objects without having to modify them *(open/closed principle)*.<br>**_[accept, open/closed, legacy systems]_**. 
**Creational:** Abstract Factory | | .<br>**_[]_**.
**Creational:** Builder | | .<br>**_[]_**.
**Creational:** Factory Method | | .<br>**_[]_**.
**Creational:** Multiton | OK | It has a list of named instances that are used, like a singleton but with N instances.<br>**_[]_**.
**Creational:** Pool | | It uses a set of initialized objects kept ready to use (A Pool), rather than allocating and destroying them on demand.<br>**_[]_**. 
**Creational:** Prototype | | Create object based on an existing object through cloning.<br>**_[clone]_**.
**Creational:** SimpleFactory | | .<br>**_[]_**.
**Creational:** Singleton | OK | It has only one instance of this object in the application that will handle all calls.<br>**_[]_**.
**Creational:** StaticFactory | | .<br>**_[]_**.
**Structural:** Adapter | | .<br>**_[]_**.
**Structural:** Bridge | | .<br>**_[]_**.
**Structural:** Composite | | .<br>**_[]_**.
**Structural:** DataMapper | | It performs bidirectional transfer of data between a persistent data store and an in memory data representation.<br>**_[]_**.
**Structural:** Decorator | | .<br>**_[]_**.
**Structural:** Dependency Injection | OK | It injects an object inside another object, *(normally via constructor)*, reducing the coupling and the need to extend it.<br>**_[constructor, injection]_**. 
**Structural:** Facade | | .<br>**_[]_**.
**Structural:** Fluent Interface | OK | To write code that is easy readable just like sentences in a natural language (like English).<br>**_[chained methods, eloquent, return this]_**.
**Structural:** Flyweight | | It shares similar objects as much as possible to minimise memory usage.<br>**_[]_**.
**Structural:** Proxy | OK | It avoids the instance to execute again the heavy job, already executed by the parent or it is a security layer who opens the door to the functionality.<br>**_[]_**. 
**Structural:** Registry | | It implements a central storage for objects often used throughout the application.<br>**_[]_**.



## Processing
+ **Chain of Responsibility** _(Behavioral)_ <br>It helps building a chain of objects. Request enters from one end and keeps going from object to object till it finds the suitable handler.<br>**_[next, handlers, switch statement]_**

+ **Mediator** _(Behavioral)_ <br>It controls the interaction between two objects. They don't need to have the knowledge of each other's implementation.<br>**_[middleware]_**. 

+ **Strategy** _(Behavioral)_ <br>It allows you to switch the algorithm or strategy based upon the situation.<br>**_[filter, by asc-desc, by id-date]_**

+ **Specification** _(Behavioral)_ <br>It builds a clear specification of business rules, where objects can be checked against.<br>**_[isSatisfiedBy, and-or-not]_**

+ **Template Method** _(Behavioral)_ <br>It defines the skeleton of how a certain algorithm could be performed, but defers the implementation of those steps to the children classes.<br>**_[parent-child template, abstract class, builder, fluent interface)_** 

+ **Visitor** _(Behavioral)_ <br>It adds further operations to objects without having to modify them *(open/closed principle)*.<br>**_[accept, open/closed, legacy systems]_**. 


## State Changing
+ **Memento** _(Behavioral)_ <br>It captures and stores the current state of an object, in a manner that it can be restored later.<br>**_[undo-redo, state, clone]_** 

+ **State** _(Behavioral)_ <br>It lets you change the behavior of a class when the state changes.<br>**_[state, "created, payed, shipped and done"]_** 

+ **Observer** _(Behavioral)_ <br>An object, called the subject, maintains a list of its dependents (observers), and notifies them automatically of any state changes.<br>**_[state, notification, observer, subject]_**


## High Cost Objects
+ **Flyweight** _(Structural)_ <br>It shares similar objects as much as possible to minimise memory usage.<br>**_[pool, cache, share, "returning existing objects or creating new ones"]_**

+ **Pool** _(Creational)_ <br>It uses a set of initialized objects kept ready to use (A Pool), rather than allocating and destroying them on demand.<br>**_[pool, recycle, "get and dispose", "free and occupied", "create, receive, keep, deliver back and don't destroy"]_** 

+ **Prototype** _(Creational)_ <br>Create object based on an existing object through cloning.<br>**_[clone]_**.

+ **Proxy** _(Structural)_ <br>It avoids the instance to execute again the heavy job, already executed by the parent or it is a security layer who opens the door to the functionality.<br>**_[security, heavy job, "execute method from another class"]_** 


## Global State
+ **Registry** _(Structural)_ <br>It implements a central storage for objects often used throughout the application.<br>**_[]_**

+ **Singleton** _(Creational)_ <br>It has only one instance of this object in the application that will handle all calls.<br>**_[]_**

+ **Multiton** _(Creational)_ <br>It has a list of named instances that are used, like a singleton but with N instances.<br>**_[]_**


## Miscellaneous
+ **Dependency Injection** _(Structural)_ <br>It injects an object inside another object, *(normally via constructor)*, reducing the coupling and the need to extend it.<br>**_[constructor, injection]_**

+ **Fluent Interface** _(Structural)_ <br>To write code that is easy readable just like sentences in a natural language (like English).<br>**_[chained methods, eloquent, return this]_**

+ **Iterator** _(Behavioral)_ <br>It creates an **object iterable** and to make it appear **like a collection of objects**.<br>**_[collection, foreach]_**.

+ **NullObject** _(Behavioral)_ <br>It returns objects that won't never be null, eliminating the conditional is_null() check.<br>**_[is_null, never]_**



