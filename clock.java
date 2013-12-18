class MirroredClock {
 
	public static void main(String[] args) {
		String[] questions = {"10:00", "01:15", "03:40", "00:00", "11:53"};
		for (String time : questions) {
			System.out.println(time + " → " + whatTimeIsIt(time));
		}
	}
 
	private static String whatTimeIsIt(String time) {
		String[] in = time.split(":");
		int h = Integer.parseInt(in[0]);
		int m = Integer.parseInt(in[1]);
		int ans = 12 * 60 - h * 60 - m;
		return String.format("%02d:%02d", ans / 60 % 12, ans % 60);
	}
}
