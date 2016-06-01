<?php
	require_once './model/DB.php';

	class Task extends DB {

		private $task_per_page = 10;

		public function __construct() {
			parent::__construct();
		}
		public function get_tasks($page) {
			$stmt = $this->conn->prepare("SELECT * FROM tasks LIMIT :offset, :lim");

			$stmt->bindValue(':offset', $this->task_per_page * (intval($page) - 1), PDO::PARAM_INT);
			$stmt->bindValue(':lim', $this->task_per_page, PDO::PARAM_INT);

			$stmt->execute();	
			return $stmt->fetchAll();
		}

		public function add_task($task) {
			$stmt = $this->conn->prepare("INSERT INTO tasks (task) VALUES (?)");
			$stmt->execute(array($task));
		}

		public function delete($id) {
			$stmt = $this->conn->prepare("DELETE FROM tasks WHERE tasks.id = ?");
			$stmt->execute(array($id));
		}

		public function update($id, $task) {
			$stmt = $this->conn->prepare("UPDATE tasks SET task = ? WHERE id =?");
			$stmt->execute(array($task, $id));
		}
		public function get_task_count() {
			$task_count = $this->count();
			return ceil($task_count / $this->task_per_page);
		}

		private function count() {
			$stmt = $this->conn->query('SELECT count(id) as task_count FROM tasks');
			return $stmt->fetch()['task_count'];
		}

		public function change_status() {
			if ($task->status) { $task->status = false;
				$tasksave_to_db();
			}
			else {$task->status=true;
				$tasksave_to_db();}
		}
	}
	?>