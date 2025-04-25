# 💡 Laravel SOLID Principles & Best Practices

A practical guide to writing clean, scalable, and maintainable PHP code using Laravel and the SOLID principles of object-oriented design.

## SOLID Principles

### Single Responsibility Principle

Classes are responsible for only one thing, for example, the InvoiceService focuses purely on business logic, leaving database interaction and email sending to separate classes.

### Open/Closed Principle

The system is open for extension but closed for modification. For example, you can add new payment methods (e.g., PayPal, Stripe) without altering the core payment processing logic.

### Liskov Substitution Principle

Derived classes should be replaceable with their base classes without affecting the behavior. An example with different NotificationService implementations for email and SMS notifications.

### Interface Segregation Principle

Clients should not be forced to depend on interfaces they do not use. We have separate interfaces for Worker and Eater to avoid unnecessary methods in the classes.

### Dependency Inversion Principle

High-level modules should not depend on low-level modules. This is demonstrated by using interfaces (OrderRepositoryInterface) instead of concrete implementations like DatabaseOrderRepository.

---

## Design Patterns

### Repository Pattern

The Repository Pattern abstracts the data layer, allowing for easier testing and better separation of concerns.

- Contracts/PostRepositoryInterface.php: Defines methods for data retrieval.
- EloquentPostRepository.php: Eloquent-based implementation of the repository.
- PostController.php: A controller that interacts with the repository, keeping the controller logic clean.

```
// Example usage in the controller:
public function index()
{
    $posts = $this->postRepository->all();
    return view('posts.index', compact('posts'));
}
```

### Strategy Pattern

The Strategy Pattern allows different algorithms to be swapped in and out at runtime, such as payment gateways.

- PaymentStrategy.php: Interface that all payment methods implement.
- PaypalStrategy.php & StripeStrategy.php: Concrete strategies for PayPal and Stripe.
- PaymentContext.php: Context that can dynamically change its payment strategy.

```
$paymentContext = new PaymentContext();
$paymentContext->setStrategy(new PaypalStrategy());
echo $paymentContext->pay(100); // Paid 100 using PayPal
```

---

## What’s Inside

### SOLID Principle Examples (Laravel-specific)
Each folder includes a real-world example using Laravel services, models, controllers, and interfaces.

| Principle                  | Folder                         | Description                                      |
|---------------------------|--------------------------------|--------------------------------------------------|
| S – Single Responsibility | `solid/S-SingleResponsibility` | Each class has one job (e.g. service for invoicing) |
| O – Open/Closed           | `solid/O-OpenClosed`           | Extend logic without modifying base code         |
| L – Liskov Substitution   | `solid/L-LiskovSubstitution`   | Swap subclasses without breaking functionality   |
| I – Interface Segregation | `solid/I-InterfaceSegregation` | Use focused interfaces, not fat contracts        |
| D – Dependency Inversion  | `solid/D-DependencyInversion`  | Depend on abstractions, not implementations      |

---

### OOP Patterns

Includes extra best-practice Laravel patterns:

- Repository Pattern (`design-patterns/repository-pattern`)
- Strategy Pattern (e.g. swappable payment logic)
- Container Binding & Dependency Injection

---

## Why This Repo?
- Designed for developers aiming to level up Laravel architecture.
- Clean examples with explanations and folder-by-folder clarity.

---

## How to Use

You don’t need to run a full Laravel app — this is mostly educational code samples you can browse or pull into your own projects.

But you can spin up a Laravel app and drop these files in `/app/Services`, `/app/Interfaces`, etc., as needed.

---

## 📎 License

MIT — free to use, fork, and share.
