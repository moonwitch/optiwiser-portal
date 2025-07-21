# Optiwiser-Portal



[![Status CI/CD](https://github.com/moonwitch/optiwiser-portal/actions/workflows/main.yml/badge.svg)](https://github.com/moonwitch/optiwiser-portal/actions)

[![Open Issues](https://img.shields.io/github/issues/moonwitch/optiwiser-portal)](https://github.com/moonwitch/optiwiser-portal/issues)

[![Huidige Milestone](https://img.shields.io/badge/milestone-M1:_Backend_Foundation-blue)](https://github.com/moonwitch/optiwiser-portal/milestones)



Dit project is een facturatie- en bookingportaal voor de data consultancy business Optiwiser. Het wordt gebouwd als schoolproject en bevat een Vue.js frontend en een PHP backend API.



## 🏛️ Architectuur



Hieronder staat een interactief diagram van de projectarchitectuur. Klik op de componenten om de gerelateerde taken te zien.



```mermaid

graph TD

    subgraph "✨ Your Workspace"

        A["💻 You (in Project IDX)"]

    end



    subgraph "🐙 Version Control & CI/CD"

        B["GitHub Repo (optiwiser-portal)"]

        C["🚀 GitHub Actions (CI/CD)"]

    end



    subgraph "☁️ Cloud Hosting"

        D[🌍 Fly.io Platform]

    end

    

    subgraph "🔗 External Services"

        E["🗄️ Turso (Database)"]

    end



    subgraph "Running Application on Fly.io"

        subgraph D

            F["🖥️ Vue.js Frontend"]

            G["⚙️ PHP API Backend"]

        end

    end



    subgraph "👤 Users"

        H["End User (Browser)"]

    end



    %% The Connections

    A -- "git push" --> B

    B -- "Trigger" --> C

    C -- "Deploy" --> F

    C -- "Deploy" --> G

    

    H -- "HTTPS Request" --> F

    F -- "API Call" --> G

    G -- "DB Query" --> E



    %% --- Clickable Links ---

    click B "[https://github.com/moonwitch/optiwiser-portal/issues](https://github.com/moonwitch/optiwiser-portal/issues)" "View All Project Issues"

    click F "[https://github.com/moonwitch/optiwiser-portal/issues?q=is%3Aopen+is%3Aissue+label%3A%22component%3A+ui%22](https://github.com/moonwitch/optiwiser-portal/issues?q=is%3Aopen+is%3Aissue+label%3A%22component%3A+ui%22)" "View Frontend Issues"

    click G "[https://github.com/moonwitch/optiwiser-portal/issues?q=is%3Aopen+is%3Aissue+label%3A%22component%3A+api%22](https://github.com/moonwitch/optiwiser-portal/issues?q=is%3Aopen+is%3Aissue+label%3A%22component%3A+api%22)" "View Backend Issues"

````



## 🛠️ Tech Stack



Frontend: Vue.js & Bulma CSS

Backend: PHP 8+

Database: Turso (SQLite in the cloud)

Hosting: Fly.io

Development: Firebase Studio



## 🎯 Project Status & Roadmap



Dit project wordt ontwikkeld aan de hand van [Milestones](https://github.com/moonwitch/optiwiser-portal/milestones). We werken momenteel aan **M1: Backend Foundation**.



### Open Taken voor de Huidige Milestone



| Taak | Link |

|---|---|

*Hier komt straks een automatisch gegenereerde lijst met taken*



## 🚀 Local Development



Volg deze stappen om het project lokaal te draaien:



Clone de repository:



```bash

git clone [https://github.com/moonwitch/optiwiser-portal.git](https://github.com/moonwitch/optiwiser-portal.git)

cd optiwiser-portal

```



Start de Frontend:



```bash

cd frontend

npm install

npm run dev

```



Start de Backend (in een aparte terminal):



```bash

cd backend

composer install

php -S localhost:8000

````



## 🔗 Quick Links

(Projectbord)[https://github.com/users/moonwitch/projects/20]

(Milestones Overzicht)[https://github.com/moonwitch/optiwiser-portal/milestones]

