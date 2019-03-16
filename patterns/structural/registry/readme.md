# Registry

+ It implements a **central storage for objects often used throughout the application**. 

+ It is typically implemented using an **abstract class with only static methods** (or using the Singleton pattern). 

+ This introduces **global state, which should be avoided at all times**. Instead implement it using **Dependency Injection**.

## Recipe



![](domnikl/diagram.png)

## Sources
+ [Domnikl](https://github.com/domnikl/DesignPatternsPHP)