# clean-archi-queue

## Option 1: The features are aware of the library.

<img width="774" height="231" alt="image" src="https://github.com/user-attachments/assets/ea132de3-a574-44ef-ac3c-0b1349c1f82d" />

- 🟢 Dependencies between components are unidirectional.
- 🟢 Boundary crossing is done through interfaces, introducing little rigidity.
- 🟢 Library components are easily reusable from one feature to another.
- 🟢 Libraries are generally stable, preserving the decreasing instability gradient.
- 🔴 Features (domain) become coupled to technical implementation details exposed by the libraries.
- 🟠 This limits the ability of features to drive design through their own functional contracts.

## Option 2: The features are unaware of the library.

<img width="756" height="474" alt="image" src="https://github.com/user-attachments/assets/e57c0bde-4be0-4059-83bb-9101e8b706b9" />

- 🟢 Dependencies between components are unidirectional.
- 🟢 Boundary crossing is done through interfaces, introducing little rigidity.
- 🟢 Dependencies go in the right direction: from technical to domain.
- 🟢 Features can express their functional needs through contracts.
- 🟢 Contracts declared by the features can be shared across features.
- 🟠 The library must satisfy the functional needs of the features, which may lead to more components being added to the library.
- 🟠 More indirection between the Shared components and the Library (dependency inversion).

