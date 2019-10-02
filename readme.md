# Design Patterns Implementation

Design patterns are **solutions to recurring problems**, guidelines on how to tackle certain problems.

This project is based on repositories of [Dominik Liebler](https://github.com/domnikl/DesignPatternsPHP) and [Kamran Ahmed](https://github.com/kamranahmedse/design-patterns-for-humans)

## Patterns: Behavioral (11)
+ Create the **communication between the objects**. 
+ What makes them **different from structural patterns** is they don't just specify the structure but also **outline the patterns for message passing/communication between them**. 
+ How to run a behavior in software component?

### Patterns
+ [DK] [Command](patterns/behavioral/command) _(The Waitress)_
+ [D] [NullObject](patterns/behavioral/nullobject) _(Never Null)_
+ [DK] [Observer](patterns/behavioral/observer) _(Notifier)_
+ [D] [Specification](patterns/behavioral/specification) _(AndOrNor)_
+ [DK] [Visitor](patterns/behavioral/visitor) _()_

## Patterns: Creational (9)
Focused towards **how to instantiate an object** or group of related objects.

### Patterns
1. [DK] [Abstract Factory](patterns/creational/abstract-factory)
1. [DK] [Factory Method](patterns/creational/factory-method)
1. [DK] [Simple Factory](patterns/creational/simple-factory)
1. [D] [Static Factory](patterns/creational/static-factory)
1. [DK] [Builder](patterns/creational/builder)
1. [D] [Pool](patterns/creational/pool)
1. [DK] [Prototype](patterns/creational/prototype)
1. [DK] [Singleton](patterns/creational/singleton)
1. [D] [Multiton](patterns/creational/multiton)


## Patterns: Structural (11)
+ Concerned with object composition or **how the entities can use each other**. 
+ How to build a software component?

### Patterns
+ [D] [DataMapper](patterns/structural/data-mapper) _(The Mapper)_
+ [D] [Dependency Injection](patterns/structural/dependency-injection) _(The Injector)_
+ [D] [Fluent Interface](patterns/structural/fluentinterface) _(Chain Caller)_ 
+ [DK] [Flyweight](patterns/structural/flyweight) _(Object Sharer)_
+ [DK] [Proxy](patterns/structural/proxy) _(Door Keeper)._
+ [D] [Registry](patterns/structural/registry) _(Global State Logger). Anti-pattern, use DI._
