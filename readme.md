# Design Patterns Implementation

Design patterns are **solutions to recurring problems**, guidelines on how to tackle certain problems.

## Patterns: Behavioral (11)
+ Create the **communication between the objects**. 
+ What makes them **different from structural patterns** is they don't just specify the structure but also **outline the patterns for message passing/communication between them**. 
+ "How to run a behavior in software component?"

### Patterns
+ [D] [NullObject](patterns/behavioral/nullobject) _(The Never Null)_
+ [D] [Specification](patterns/behavioral/specification) _(The AndOrNor)_

## Patterns: Creational (9)
Focused towards **how to instantiate an object** or group of related objects.

### Patterns
+ [D] [Multiton](patterns/creational/multiton) _(The Multiple Ones). Anti-pattern, use DI._
+ [D] [Pool](patterns/creational/pool) _(The "On hold" Holder)_
+ [DK] [Singleton](patterns/creational/singleton) _(The President, The Only One). Anti-pattern, use DI._


## Patterns: Structural (11)
Concerned with object composition or **how the entities can use each other**.  "How to build a software component?"

### Patterns
+ [D] [DataMapper](patterns/structural/data-mapper) _(The Mapper)_
+ [D] [Dependency Injection](patterns/structural/dependency-injection) _(The Injector)_
+ [D] [Fluent Interface](patterns/structural/fluentinterface) _(The Chain Caller)_ 
+ [DK] [Flyweight](patterns/structural/flyweight) _(The Object Sharer)_
+ [D] [Registry](patterns/structural/registry) _(The Global State). Anti-pattern, use DI._


## Sources
This project is based on repositories of [Dominik Liebler](https://github.com/domnikl/DesignPatternsPHP) and [Kamran Ahmed](https://github.com/kamranahmedse/design-patterns-for-humans)


