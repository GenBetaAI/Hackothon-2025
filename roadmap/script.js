document.addEventListener("DOMContentLoaded", function () {
    // Get all roadmap buttons
    const roadmapButtons = document.querySelectorAll(".roadmap-card");

    roadmapButtons.forEach((button) => {
        button.addEventListener("click", function () {
            const roadmap = button.getAttribute("data-roadmap");
            
            // Define file paths (Make sure the PDFs exist in the 'roadmaps/' folder)
            const roadmapFiles = {
                "frontend": "roadmaps/frontend.pdf",
                "backend": "roadmaps/backend.pdf",
                "devops": "roadmaps/devops.pdf",
                "fullstack": "roadmaps/full-stack.pdf",
                "ai-engineer": "roadmaps/ai-engineer.pdf",
                "data-analyst": "roadmaps/data-analyst.pdf",
                "ai-data-scientist": "roadmaps/ai-data-scientist.pdf",
                "android": "roadmaps/android.pdf",
                "ios": "roadmaps/ios.pdf",
                "postgresql": "roadmaps/postgresql.pdf",
                "blockchain": "roadmaps/blockchain.pdf",
                "qa": "roadmaps/qa.pdf",
                "software-architect": "roadmaps/software-architect.pdf",
                "ux-design": "roadmaps/ux-design.pdf",
                "game-dev": "roadmaps/game-dev.pdf",
                "tech-writer": "roadmaps/tech-writer.pdf",
                "mlops": "roadmaps/mlops.pdf",
                "product-manager": "roadmaps/product-manager.pdf",
                "eng-manager": "roadmaps/eng-manager.pdf",
                "dev-relations": "roadmaps/dev-relations.pdf",
                "computer-science": "roadmaps/computer-science.pdf",
                "react": "roadmaps/react.pdf",
                "vue": "roadmaps/vue.pdf",
                "angular": "roadmaps/angular.pdf",
                "javascript": "roadmaps/javascript.pdf",
                "nodejs": "roadmaps/nodejs.pdf",
                "typescript": "roadmaps/typescript.pdf",
                "python": "roadmaps/python.pdf",
                "sql": "roadmaps/sql.pdf",
                "system-design": "roadmaps/system-design.pdf",
                "api-design": "roadmaps/api-design.pdf",
                "aspnet-core": "roadmaps/aspnet-core.pdf",
                "java": "roadmaps/java.pdf",
                "c++": "roadmaps/c++.pdf",
                "flutter": "roadmaps/flutter.pdf",
                "spring-boot": "roadmaps/spring-boot.pdf",
                "go-roadmap": "roadmaps/go-roadmap.pdf",
                "rust": "roadmaps/rust.pdf",
                "graphql": "roadmaps/graphql.pdf",
                "design-architecture": "roadmaps/design-architecture.pdf",
                "design-system": "roadmaps/design-system.pdf",
                "react-native": "roadmaps/react-native.pdf",
                "aws": "roadmaps/aws.pdf",
                "code-review": "roadmaps/code-review.pdf",
                "docker": "roadmaps/docker.pdf",
                "kubernetes": "roadmaps/kubernetes.pdf",
                "linux": "roadmaps/linux.pdf",
                "mongodb": "roadmaps/mongodb.pdf",
                "prompt-engineering": "roadmaps/prompt-engineering.pdf",
                "terraform": "roadmaps/terraform.pdf",
                "data-structures": "roadmaps/data-structures.pdf",
                "git-github": "roadmaps/git-github.pdf",
                "redis": "roadmaps/redis.pdf",
                "Backend-Performance": "roadmaps/Backend-Performance.pdf",
                "Frontend-Performance": "roadmaps/Frontend-Performance.pdf",
                "API Security": "roadmaps/API-Security.pdf",
                "Code Reviews": "roadmaps/Code-Reviews.pdf",
                "AWS": "roadmaps/AWS.pdf",
                "php": "roadmaps/php.pdf",
                "backend": "roadmaps/backend.pdf",
                "fronted": "roadmaps/fronted.pdf",
                "api-security": "roadmaps/api-security.pdf",
            };

            // Check if the selected roadmap exists
            if (roadmapFiles[roadmap]) {
                // Create an anchor element to trigger download
                const link = document.createElement("a");
                link.href = roadmapFiles[roadmap];
                link.download = roadmapFiles[roadmap].split("/").pop(); // Extract filename
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            } else {
                alert("Roadmap file not found!");
            }
        });
    });
});
// Updated JavaScript with loading state
document.addEventListener("DOMContentLoaded", function () {
    const roadmapButtons = document.querySelectorAll(".roadmap-card");
    const loading = document.createElement("div");
    loading.className = "loading";
    loading.innerHTML = `<div class="gg-spinner"></div>`;
    document.body.appendChild(loading);

    roadmapButtons.forEach((button) => {
        button.addEventListener("click", async function () {
            loading.classList.add("active");
            const roadmap = button.getAttribute("data-roadmap");
            
            try {
                // Simulate network delay
                await new Promise(resolve => setTimeout(resolve, 500));
                
                const filePath = `roadmaps/${roadmap}.pdf`;
                const response = await fetch(filePath);
                
                if (!response.ok) throw new Error("File not found");
                
                const blob = await response.blob();
                const url = window.URL.createObjectURL(blob);
                const a = document.createElement("a");
                a.href = url;
                a.download = filePath.split("/").pop();
                document.body.appendChild(a);
                a.click();
                document.body.removeChild(a);
                window.URL.revokeObjectURL(url);
            } catch (error) {
                const toast = document.createElement("div");
                toast.textContent = "Roadmap not available yet!";
                toast.style.cssText = `
                    position: fixed;
                    bottom: 20px;
                    left: 50%;
                    transform: translateX(-50%);
                    background: #ef4444;
                    color: white;
                    padding: 1rem 2rem;
                    border-radius: 0.5rem;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                    animation: slideIn 0.3s ease;
                `;
                document.body.appendChild(toast);
                setTimeout(() => toast.remove(), 3000);
            } finally {
                loading.classList.remove("active");
            }
        });
    });
});