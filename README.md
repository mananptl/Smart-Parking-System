# Smart Parking System Using ESP32 & Ultrasonic Sensor

## Overview
The Smart Parking System is an IoT-based automated parking management solution designed to monitor parking slot availability in real time. The system uses ESP32 microcontrollers and HC-SR04 ultrasonic sensors to detect vehicle presence and update parking slot status automatically on a live web dashboard.

This project reduces manual parking monitoring, minimizes traffic congestion, saves fuel, and improves parking management efficiency through real-time monitoring and wireless communication.

---

## Problem Statement
Traditional parking systems rely on manual monitoring, which leads to:
- Time wastage while searching for parking
- Traffic congestion
- Fuel wastage
- Human dependency
- Inefficient parking management

This project provides a low-cost and scalable automated smart parking solution using IoT technology.

---

## Objectives
- Detect parking slot occupancy automatically
- Provide real-time parking availability updates
- Reduce manual monitoring
- Improve parking space utilization
- Develop a low-cost and scalable parking solution

---

## Features
- Real-time parking slot detection
- Live web dashboard monitoring
- Automatic occupancy detection
- Wi-Fi based communication
- LED status indication
- Database storage with timestamps
- Real-time dashboard auto-refresh
- Low-cost IoT implementation
- Scalable architecture for multiple parking slots

---

## Technologies Used

### Hardware
- ESP32 Microcontroller
- HC-SR04 Ultrasonic Sensor
- LED Indicators
- Jumper Wires
- Power Supply

### Software
- Arduino IDE
- PHP
- MySQL
- HTML
- CSS
- Embedded C/C++
- XAMPP Server

---

## System Architecture

The system consists of three major layers:

### 1. Sensing Layer
- Ultrasonic sensors detect vehicle presence
- Distance measurements are continuously monitored

### 2. Processing & Communication Layer
- ESP32 processes sensor data
- Determines slot occupancy status
- Sends real-time updates using Wi-Fi

### 3. Application Layer
- PHP server receives parking data
- MySQL database stores slot information
- Web dashboard displays live parking status

---

## System Workflow

1. Ultrasonic sensor measures parking slot distance
2. ESP32 processes sensor readings
3. Slot status classified as:
   - Occupied
   - Vacant
4. Status transmitted to PHP server via Wi-Fi
5. MySQL database stores updated status
6. Live dashboard displays parking availability
7. System continuously monitors parking slots

---

## Modules

### Sensor Module
- Detects vehicle presence using ultrasonic sensors

### Processing Module
- Processes sensor readings
- Applies threshold logic

### Communication Module
- Transfers parking data wirelessly using Wi-Fi

### Server & Database Module
- Stores slot information
- Maintains timestamps

### Display Module
- Live dashboard for monitoring parking availability

---

## Programming Languages
- Embedded C/C++
- PHP
- HTML
- CSS
- SQL

---

## Testing Performed
- ESP32 Initialization Testing
- Ultrasonic Sensor Testing
- Parking Occupancy Detection
- LED Status Testing
- Wi-Fi Connectivity Testing
- Server Data Update Testing
- Live Dashboard Testing

---

## Results
- Accurate vehicle detection
- Real-time dashboard updates
- Stable system performance
- Reliable Wi-Fi communication
- User-friendly monitoring interface
- Low-cost and scalable implementation

---

## Applications
- Shopping Malls
- Colleges & Universities
- Offices
- Residential Parking
- Hospitals
- Smart City Infrastructure

---

## Future Improvements
- Mobile application integration
- Cloud storage support
- Smart analytics and prediction
- Automated billing system
- License plate recognition
- Solar-powered parking nodes
- Smart city integration


---

## Dashboard Features
- Live parking slot status
- Occupied/Vacant indication
- Automatic updates
- Simple user interface
- Real-time monitoring

---

## Communication Protocol
- Wi-Fi (HTTP/TCP-IP)
- Server-Database Communication
- GPIO Interfacing

---

## Performance Evaluation

| Parameter | Performance |
|---|---|
| Detection Accuracy | High |
| Response Time | Near Real-Time |
| Communication Reliability | Stable |
| Dashboard Usability | User-Friendly |
| System Stability | Reliable |

---

## Conclusion
The Smart Parking System successfully demonstrates an IoT-based automated parking management solution using ESP32 and ultrasonic sensors. The system provides accurate real-time parking monitoring with reliable communication and an easy-to-use dashboard interface.

This project shows how IoT and embedded systems can solve real-world parking problems efficiently and cost-effectively.

---

## Authors
- Patel Manan
- Patel Soyavati

Department of Computer Engineering  
Vidhyadeep University, Surat, Gujarat

---

## License
This project is developed for academic and educational purposes.
