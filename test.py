from locust import HttpLocust, TaskSet, task, between

class WebsiteTasks(TaskSet):
    @task
    def index(self):
        self.client.get("/")
        
    @task
    def about(self):
        self.client.get("/")

class WebsiteUser(HttpLocust):
    task_set = WebsiteTasks
    wait_time = between(5, 15)
