# Design Patterns: Resume

## Categories
1. Factories
1. Global State
1. High Cost Objects
1. Middleware
1. Processing
1. State Changing
1. Miscellaneous


<!-- <br> .<br>**_[]_** -->
## Factories
1. **Abstract Factory** _(Creational)_ 
1. **Factory Method** _(Creational)_ 
1. **Simple Factory** _(Creational)_ 
1. **Static Factory** _(Creational)_ 

## Global State
+ **Singleton** _(Creational)_ <br>It has only one instance of this object in the application that will handle all calls.<br>**_[the president, the only one]_**

+ **Multiton** _(Creational)_ <br>It has a list of named instances that are used, like a singleton but with N instances.<br>**_[the multiple ones]_**

## High Cost Objects
1. **Pool** _(Creational)_ <br>It uses a set of initialized objects keep them ready to use _(in a Pool)_, rather than allocating and destroying them on demand.<br>**_[pool, recycle, "get and dispose", "free and occupied", "create, receive, keep, deliver back and don't destroy"]_** 

1. **Prototype** _(Creational)_ <br>Create object based on an existing object through cloning.<br>**_[clone]_**.


## Middleware
1. **Builder** _(Creational)_ <br>It creates different flavors of an object while avoiding constructor pollution.<br>**_[fluent interface, factory, adapter]_**.

1. **Mediator** _(Behavioral)_ <br>It controls the interaction between two objects. They don't need to have the knowledge of each other's implementation.<br>**_[middleware]_**. 



## Processing
1. **Chain of Responsibility** _(Behavioral)_ <br>It helps building a chain of objects. Request enters from one end and keeps going from object to object till it finds the suitable handler.<br>**_[next, handlers, switch statement]_**

1. **Specification** _(Behavioral)_ <br>It builds a clear specification of business rules, where objects can be checked against.<br>**_[isSatisfiedBy, and-or-not]_**

1. **Strategy** _(Behavioral)_ <br>It allows you to switch the algorithm or strategy based upon the situation.<br>**_[filter, by asc-desc, by id-date]_**

1. **Template Method** _(Behavioral)_ <br>It defines the skeleton of how a certain algorithm could be performed, but defers the implementation of those steps to the children classes.<br>**_[parent-child template, abstract class, builder, fluent interface)_** 

1. **Visitor** _(Behavioral)_ <br>It adds further operations to objects without having to modify them *(open/closed principle)*.<br>**_[accept, open/closed, legacy systems]_**.


## State Changing
1. **Memento** _(Behavioral)_ <br>It captures and stores the current state of an object, in a manner that it can be restored later.<br>**_[undo-redo, state, clone]_** 

1. **Observer** _(Behavioral)_ <br>An object, called subject, maintains a list of its dependents (observers) and notifies them automatically of any state changes.<br>**_[state, notification, observer, subject]_**

1. **State** _(Behavioral)_ <br>It lets you change the behavior of a class when the state changes.<br>**_[state, "created, payed, shipped and done"]_** 


## Miscellaneous
1. **Command** _(Behavioral)_ <br>It encapsulates the invocation and decouples.<br>**_[client, invoker, command, receiver, undo]_**.

1. **Iterator** _(Behavioral)_ <br>It creates an object iterable and to make it appear like a collection of objects.<br> **_[collection, foreach]_**.

1. **NullObject** _(Behavioral)_ <br>It returns objects that won't never be null, eliminating the conditional is_null() check.<br>**_[is_null, never]_**




<!-- 
+ [DK] [Command](patterns/behavioral/command) _(The Waitress)_
+ [D] [NullObject](patterns/behavioral/nullobject) _(Never Null)_
+ [DK] [Observer](patterns/behavioral/observer) _(Notifier)_
+ [D] [Specification](patterns/behavioral/specification) _(AndOrNor)_

+ [D] [DataMapper](patterns/structural/data-mapper) _(The Mapper)_
+ [D] [Dependency Injection](patterns/structural/dependency-injection) _(The Injector)_
+ [D] [Fluent Interface](patterns/structural/fluentinterface) _(Chain Caller)_ 
+ [DK] [Flyweight](patterns/structural/flyweight) _(Object Sharer)_
+ [DK] [Proxy](patterns/structural/proxy) _(Door Keeper)._
+ [D] [Registry](patterns/structural/registry) _(Global State Logger). Anti-pattern, use DI._
-->



<!--

## Middleware
+ **Adapter** _(Structural)_ <br>It creates a layer to wrap an incompatible object in an adapter to make it compatible with another class without modifying their source code.<br>**_[translate, convert, adapter, middleware]_**.


## High Cost Objects
+ **Flyweight** _(Structural)_ <br>It shares similar objects as much as possible to minimise memory usage.<br>**_[pool, cache, share, "returning existing objects or creating new ones"]_**

+ **Proxy** _(Structural)_ <br>It avoids the instance to execute again the heavy job, already executed by the parent or it is a security layer who opens the door to the functionality.<br>**_[security, heavy job, "execute method from another class"]_** 


## Global State
+ **Registry** _(Structural)_ <br>It implements a central storage for objects often used throughout the application.<br>**_[]_**

## Miscellaneous
+ **Dependency Injection** _(Structural)_ <br>It injects an object inside another object, *(normally via constructor)*, reducing the coupling and the need to extend it.<br>**_[constructor, injection]_**

+ **Fluent Interface** _(Structural)_ <br>To write code that is easy readable just like sentences in a natural language (like English).<br>**_[chained methods, eloquent, return this]_**

+ **Bridge** _(Structural)_ <br> The implementation details are pushed to another object with a separate hierarchy. It is about composition over inheritance.<br>**_[composition, content injection, service]_**.


+ **Composite** _(Structural)_ <br>A group of objects is to be treated in the same way as a single instance of an object.<br>**_[]_**.

+ **Decorator** _(Structural)_ <br> It allows behavior to be added to an individual object, either statically or dynamically, without affecting the behavior of other objects from the same class.<br>**_[single responsibility]_**.

+ **Facade** _(Structural)_ <br> It provides a simplified interface to a complex subsystem..<br>**_[]_**.





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
**Behavioral:** Visitor | |  

**Structural:** DataMapper | | It performs bidirectional transfer of data between a persistent data store and an in memory data representation.<br>**_[]_**.
**Structural:** Dependency Injection | OK | It injects an object inside another object, *(normally via constructor)*, reducing the coupling and the need to extend it.<br>**_[constructor, injection]_**. 
**Structural:** Fluent Interface | OK | To write code that is easy readable just like sentences in a natural language (like English).<br>**_[chained methods, eloquent, return this]_**.
**Structural:** Flyweight | | It shares similar objects as much as possible to minimise memory usage.<br>**_[]_**.
**Structural:** Proxy | OK | It avoids the instance to execute again the heavy job, already executed by the parent or it is a security layer who opens the door to the functionality.<br>**_[]_**. 
**Structural:** Registry | | It implements a central storage for objects often used throughout the application.<br>**_[]_**.
-->


