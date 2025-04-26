# 🧠 Creational Design Patterns (PHP) - Summary

## 1. Singleton
- **Goal:** Ensure a class has only one instance.
- **Key Concepts:**
    - Private constructor
    - Static instance getter
- **Common Uses:**
    - Database connection
    - Configuration management
    - Logging service

---

## 2. Factory Method
- **Goal:** Create objects without specifying the exact class.
- **Key Concepts:**
    - Child classes decide which object to create.
- **Common Uses:**
    - Payment gateways
    - Notification systems
    - Message senders

---

## 3. Abstract Factory
- **Goal:** Create families of related objects without specifying their concrete classes.
- **Key Concepts:**
    - Factory of factories
    - Group several related products together
- **Common Uses:**
    - Payment systems (Stripe + PayPal full bundles)
    - UI component libraries (Light theme, Dark theme)

---

## 4. Builder
- **Goal:** Construct complex objects step-by-step.
- **Key Concepts:**
    - Director orchestrates construction
    - Different builders produce different representations
- **Common Uses:**
    - Building invoices (incoming, outgoing, returned)
    - Generating complex reports
    - Building forms or wizards

---

## 5. Prototype
- **Goal:** Clone existing objects instead of creating new ones from scratch.
- **Key Concepts:**
    - Implements `__clone()` magic method in PHP
- **Common Uses:**
    - Duplicating templates
    - Copying users, documents, shapes in drawing apps

---

## 6. Object Pool *(Bonus Practical Pattern)*
- **Goal:** Reuse expensive-to-create objects from a pool.
- **Key Concepts:**
    - Manage a collection of initialized objects
    - Pull and release objects as needed
- **Common Uses:**
    - Database connections
    - Socket management
    - Game object pooling (bullets, enemies)

---

# 🗺️ Mind Map

