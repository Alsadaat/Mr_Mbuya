# KWA BONGE - Restaurant Ordering System

## Project Overview
**KWA BONGE** is a web-based restaurant ordering system built with PHP and MySQL. The application allows customers to browse restaurant menus, create accounts, add items to a cart, and place orders. The system features user authentication, food catalog management, and order tracking.

**Project Name:** Restaurant Ordering System  
**Status:** Active Development  
**Last Updated:** February 11, 2026

---

## Project Structure

```
MR.Mbuyafinal/
│
├── PHP Files (Core Application)
│   ├── index.php              # Homepage with navigation and featured items
│   ├── login.php              # User login page with authentication
│   ├── register.php           # User registration page with validation
│   ├── menu.php               # Main menu display page
│   ├── foods.php              # Individual food items detail page
│   ├── about.php              # About restaurant page
│   ├── contact.php            # Contact information page
│   ├── db_connect.php         # Database connection configuration
│   ├── head.php               # Header/navigation template include
│   ├── footer.php             # Footer template include
│
├── Database
│   └── restaurant_ordering_system.sql  # Database schema and structure
│
├── CSS Stylesheets
│   ├── style.css              # Main stylesheet
│   └── footer.css             # Footer-specific styles
│
├── Images
│   ├── 1.jpg through 9.jpg    # Product/food images
│
└── Documentation
    └── README.md              # This file

```

---

## File Descriptions

### Core PHP Application Files

#### `index.php`
- **Purpose:** Homepage and landing page of the application
- **Features:** 
  - Navigation bar with links to menu, about, contact
  - Restaurant branding (KWA BONGE)
  - Featured items/hero section
  - Responsive navigation with color scheme (#C05000 orange)
- **Key Style Variables:** 
  - Background: #FBF7F4 (light cream)
  - Primary Color: #C05000 (burnt orange)
  - Text Color: #3E2723 (dark brown)

#### `login.php`
- **Purpose:** User authentication and login
- **Features:**
  - Email and password validation
  - Session management
  - Password verification using PHP's `password_verify()`
  - Error handling for invalid credentials
  - Redirects to menu.php upon successful login
- **Database Fields Used:** users.id, users.name, users.password, users.email
- **Session Variables Set:** `$_SESSION['user_id']`, `$_SESSION['user_name']`

#### `register.php`
- **Purpose:** New user account creation
- **Features:**
  - User registration form with name, email, password
  - Email validation using `filter_var(FILTER_VALIDATE_EMAIL)`
  - Password confirmation and strength validation (minimum 6 characters)
  - Duplicate email detection
  - Password hashing using `PASSWORD_DEFAULT` algorithm
  - Success/error feedback messages
- **Database Fields Used:** users.name, users.email, users.password, users.created_at

#### `menu.php`
- **Purpose:** Display restaurant menu items in grid layout
- **Features:**
  - 3-column responsive grid layout
  - Individual menu items with images, names, prices
  - Product cards with hover effects
  - Links to food detail pages
  - Includes header and footer templates

#### `foods.php`
- **Purpose:** Detailed view of individual food items
- **Features:**
  - Full food item description and details
  - Pricing information
  - Add to cart functionality
  - Related items suggestions
  - Styled header section with gradient background

#### `about.php`
- **Purpose:** Restaurant information and company details
- **Features:**
  - Restaurant history and mission
  - About page content
  - Company information

#### `contact.php`
- **Purpose:** Customer contact and support page
- **Features:**
  - Contact form
  - Restaurant contact information
  - Support information

#### `db_connect.php`
- **Purpose:** Database connection configuration
- **Configuration:**
  - Host: localhost
  - Database: restaurant_ordering_system
  - User: root
  - Password: (empty)
- **Error Handling:** Dies with error message if connection fails
- **Mysqli:** Uses MySQLi extension for database operations

#### `head.php`
- **Purpose:** Header template included on all pages
- **Contains:**
  - HTML head section
  - Meta tags
  - Stylesheets
  - Navigation bar
  - Branding elements

#### `footer.php`
- **Purpose:** Footer template included on all pages
- **Contains:**
  - Footer information
  - Links
  - Copyright information
  - Additional navigation

---

## Database Schema

### Database Name
`restaurant_ordering_system`

### Tables

#### `users` Table
Stores customer account information
```
Columns:
  - id (INT, Primary Key, Auto Increment)
  - name (VARCHAR 100) - Customer name
  - email (VARCHAR 100) - Customer email
  - password (VARCHAR 255) - Hashed password
  - created_at (TIMESTAMP) - Registration timestamp
```

#### `foods` Table
Stores menu items and food catalog
```
Columns:
  - id (INT, Primary Key, Auto Increment)
  - name (VARCHAR 100) - Food item name
  - image (VARCHAR 255) - Image file path
  - price (DECIMAL 10,2) - Food price
  - description (TEXT) - Food description
```

#### `cart` Table
Stores shopping cart items per user
```
Columns:
  - id (INT, Primary Key, Auto Increment)
  - user_id (INT) - Foreign key to users table
  - food_id (INT) - Foreign key to foods table
  - quantity (INT) - Quantity in cart (default: 1)
  - created_at (TIMESTAMP) - When item added to cart
```

#### `orders` Table
Stores customer orders
```
Columns:
  - id (INT, Primary Key, Auto Increment)
  - user_id (INT) - Foreign key to users table
  - total (DECIMAL 10,2) - Order total amount
  - status (VARCHAR 50) - Order status ('pending', 'completed', etc.)
  - created_at (TIMESTAMP) - Order creation timestamp
```

#### `order_items` Table
Stores individual items in each order
```
Columns:
  - id (INT, Primary Key, Auto Increment)
  - order_id (INT) - Foreign key to orders table
  - food_id (INT) - Foreign key to foods table
  - quantity (INT) - Quantity ordered
  - price (DECIMAL 10,2) - Price at time of order
```

---

## CSS Stylesheets

### `style.css`
- **Purpose:** Main application stylesheet
- **Contains:**
  - Form styling for login/register
  - Input field styles
  - Button styles
  - Error message styling
  - General layout and spacing

### `footer.css`
- **Purpose:** Footer and footer-related styling
- **Contains:**
  - Footer layout
  - Footer link styles
  - Footer typography

---

## Key Features

1. **User Authentication**
   - Secure registration with email validation
   - Login with password hashing
   - Session-based user tracking

2. **Product Catalog**
   - Browse food items
   - Detailed product pages
   - Product images and pricing

3. **Shopping Cart**
   - Add items to cart
   - Manage cart quantities
   - Cart persistence per user

4. **Order Management**
   - Place orders from cart
   - Order status tracking
   - Order history

5. **Responsive Design**
   - Mobile-friendly layouts
   - Grid-based menu display
   - Consistent branding throughout

---

## Color Scheme

| Color | hex Code | Usage |
|-------|----------|-------|
| Primary Orange | #C05000 | Navbar, buttons, headings |
| Light Hover | #FFB84D | Button hover states |
| Background | #FBF7F4 | Page background |
| text | #3E2723 | Primary text color |
| Secondary Orange | #D2691E | Gradient effects |

---

## Installation & Setup

### Requirements
- PHP 7.4 or higher
- MySQL/MariaDB database
- Web server (Apache, Nginx, etc.)

### Setup Instructions

1. **Create Database:**
   - Create a new MySQL database named `restaurant_ordering_system`
   - Import the `restaurant_ordering_system.sql` file
   ```bash
   mysql -u root -p restaurant_ordering_system < restaurant_ordering_system.sql
   ```

2. **Configure Database Connection:**
   - Open `db_connect.php`
   - Update connection details if needed (host, user, password)
   - Default: localhost, user: root, password: (empty)

3. **Place Files on Web Server:**
   - Copy all files to your web server's public directory
   - Example: `/var/www/html/MR.Mbuyafinal/`

4. **Access Application:**
   - Open browser and navigate to: `http://localhost/MR.Mbuyafinal/`
   - Homepage should load successfully

---

## User Flow

```
Visitor
  ↓
Homepage (index.php)
  ↓
Register (register.php) → Database: Add to users table
  ↓
Login (login.php) → Verify password → Create session
  ↓
Menu (menu.php) → View all food items
  ↓
Foods (foods.php) → View detailed item → Add to cart
  ↓
Cart Management → Proceed to checkout
  ↓
Order Confirmation → Database: Create order records
```

---

## Security Features

1. **Password Security:**
   - Passwords hashed using PHP's PASSWORD_DEFAULT algorithm
   - Verification using password_verify()

2. **Input Validation:**
   - Email validation using filter_var()
   - Trimmed input to prevent whitespace issues
   - Field requirement checks

3. **SQL Injection Prevention:**
   - Prepared statements using MySQLi
   - Parameter binding with bind_param()

4. **Session Management:**
   - PHP sessions for user tracking
   - User data stored in SESSION superglobal

---

## Technologies Used

- **Backend:** PHP 8.0.13
- **Database:** MySQL/MariaDB 10.4.22
- **Frontend:** HTML5, CSS3
- **Database Management:** phpMyAdmin 5.1.1

---

## Future Enhancements

- [ ] Payment gateway integration
- [ ] Admin dashboard for order management
- [ ] Email notifications for orders
- [ ] Product reviews and ratings
- [ ] Search and filtering functionality
- [ ] User profile management
- [ ] Delivery address management
- [ ] Promotional codes/discounts
- [ ] Multiple language support
- [ ] API for mobile app integration

---

## Notes

- All images (1.jpg - 9.jpg) are product/food images displayed in the menu and food pages
- The application uses MySQLi procedural approach for database operations
- Session-based authentication means users must have cookies enabled

---

## File Statistics

| Category | Count |
|----------|-------|
| PHP Files | 10 |
| CSS Files | 2 |
| Image Files | 9 |
| Database Files | 1 |
| Documentation | 1 |
| **Total** | **23** |

---

## Support & Contact

For issues or questions regarding the application, refer to the contact.php page in the application or contact the development team.

---

*Documentation Generated: February 11, 2026*
