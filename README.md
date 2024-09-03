# UserValidator

PHP class for validating email and password

## Opis zadania

Stworzenie klasy w PHP 8.3, która będzie odpowiedzialna za walidację adresu e-mail oraz hasła. Klasa ta powinna być napisana w czystym PHP, bez użycia jakichkolwiek frameworków.

### Wymagania

#### Klasa “UserValidator”

Klasa powinna zawierać dwie publiczne metody: `validateEmail(string $email): bool` oraz `validatePassword(string $password): bool`. Obie metody powinny zwracać wartość `true` w przypadku poprawnej walidacji oraz `false` w przeciwnym razie.

#### Metoda `validateEmail`

Adres e-mail powinien być walidowany za pomocą wyrażenia regularnego. Prawidłowy adres e-mail musi spełniać podstawowe zasady: zawierać znak @, przed @ powinna być co najmniej jedna litera, a po @ powinna być domena (np. example.com), która zawiera kropkę (.) i co najmniej dwie litery po kropce.

#### Metoda `validatePassword`

Hasło powinno spełniać następujące kryteria: musi zawierać co najmniej 8 znaków; musi zawierać co najmniej jedną dużą literę, jedną małą literę, jedną cyfrę oraz jeden znak specjalny (np. !, @, #, etc.); metoda powinna zwracać true, jeśli hasło spełnia wszystkie te kryteria.

### Testowanie

Domyślnie plik test.php zawiera następujące dane testowe: `$email = "ex@google.com";`, `$password = "Haslo3!!";`. Należy zmienić je na własne wartości do testowania i uruchomić plik test.php
