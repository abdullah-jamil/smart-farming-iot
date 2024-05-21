# Smart Farming System - IoT Project

The **Smart Farming System** is an innovative and automated solution designed to enhance agricultural practices by integrating modern technologies. This system utilizes NodeMCU, DHT11 temperature and humidity sensor, soil moisture sensor, and an IoT-controlled motor to create a comprehensive smart farming environment.
![IMG_9211_(copy)](https://github.com/abdullah-jamil/smart-farming-iot/assets/94765139/2cab0201-2239-42d2-bd88-38609c5bc008)
![IMG_9209_(copy)](https://github.com/abdullah-jamil/smart-farming-iot/assets/94765139/6bc52fe0-9dc5-4bc1-a19a-edab3edba1d0)

## Key Components

- **NodeMCU**: Serves as the central microcontroller responsible for data processing, sensor interfacing, and communication with the IoT platform.
- **DHT11 Sensor**: Monitors ambient temperature and humidity levels within the farming environment. This data is crucial for assessing the overall climate conditions that affect crop growth.
- **Soil Moisture Sensor**: Measures the moisture content in the soil, providing data for optimized irrigation control.
- **IoT Platform**: Enables real-time monitoring and control over the internet, allowing farmers to remotely access and manage the farm parameters.
- **Motor Control**: An IoT-controlled motor for automated irrigation. The motor can be remotely activated or deactivated based on real-time data from the soil moisture sensor, ensuring efficient water usage and crop health.

## Functionality

1. **Environmental Monitoring**:
   - The DHT11 sensor continuously monitors the temperature and humidity levels in the farming environment.
2. **Soil Moisture Measurement**:
   - The soil moisture sensor measures the moisture content in the soil, providing crucial data for irrigation management.
3. **Data Processing and Communication**:
   - NodeMCU processes sensor data and communicates with the IoT platform through a wireless connection.
4. **Remote Access and Alerts**:
   - Farmers can remotely access real-time data and receive alerts or notifications through the IoT platform.
5. **Automated Irrigation**:
   - The IoT-controlled motor is activated or deactivated based on soil moisture levels. If soil moisture drops below a certain threshold, the motor is triggered to irrigate the crops.

## Benefits

- **Efficient Water Usage**: The system optimizes irrigation based on real-time soil moisture data, reducing water wastage and promoting sustainable farming practices.
- **Remote Monitoring**: Farmers can monitor and control the farming environment from anywhere with internet access, improving overall farm management efficiency.
- **Crop Health**: By ensuring optimal temperature, humidity, and soil moisture levels, the system contributes to better crop health and increased yield.
- **Automation**: The automated motor control simplifies irrigation management, saving time and effort for farmers.

## Getting Started

### Prerequisites

- NodeMCU
- DHT11 Sensor
- Soil Moisture Sensor
- Relay Module for Motor Control
- Internet Connection

### Installation

1. **Hardware Setup**:
   - Connect the DHT11 sensor to the NodeMCU.
   - Connect the soil moisture sensor to the NodeMCU.
   - Connect the relay module to the NodeMCU for motor control.
   - Connect the motor to the relay module.

2. **Software Setup**:
   - Install the Arduino IDE and necessary libraries for NodeMCU and sensors.
   - Upload the code to NodeMCU using the Arduino IDE.

### Usage

1. Power on the NodeMCU.
2. Ensure that the NodeMCU is connected to the internet.
3. Access the IoT platform dashboard to monitor real-time data and control the motor.
4. The system will automatically manage irrigation based on soil moisture levels.

## Backend

- The backend of the deployed page is implemented using PHP, ensuring robust data management and communication between the hardware components and the IoT platform, and is deployed at [https://mycollegeproject.xyz/SmartIrrigation/login](https://mycollegeproject.xyz/SmartIrrigation/login).

## Acknowledgements

- Special thanks to my partner Hitesh Dhawan and our college seniors for their guidance and support throughout the development of this project.
- The open-source community for providing the necessary tools and libraries.

---

By integrating modern IoT technologies with traditional farming practices, the Smart Farming System aims to revolutionize agriculture, making it more efficient, sustainable, and accessible.
