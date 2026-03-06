CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    description TEXT,
    content TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO news (title, category, image_url, description, content) VALUES
('Global Summit Reaches Historic Agreement on Climate Action', 'World', 'https://images.pexels.com/photos/2990644/pexels-photo-2990644.jpeg?auto=compress&cs=tinysrgb&w=800', 'World leaders have signed a pivotal deal to reduce carbon emissions by 50% by 2030.', 'In a landmark decision, over 190 nations agreed to aggressive carbon reduction targets... (Full story content here)'),
('Championship Finals: The Underdog Team Takes It All', 'Sports', 'https://images.pexels.com/photos/262524/pexels-photo-262524.jpeg?auto=compress&cs=tinysrgb&w=800', 'An incredible victory shocked fans as the local team secured the championship trophy.', 'Against all odds, the citys beloved team rallied in the final minutes to secure a win... (Full story content here)'),
('New AI Chip Revolutionizes Mobile Computing', 'Technology', 'https://images.pexels.com/photos/8386440/pexels-photo-8386440.jpeg?auto=compress&cs=tinysrgb&w=800', 'Tech giants unveil a processor capable of real-time translation and advanced graphics.', 'The new silicon promises to make smartphones 10x faster while using half the battery... (Full story content here)'),
('Blockbuster Movie Breaks Box Office Records Opening Weekend', 'Entertainment', 'https://images.pexels.com/photos/7991579/pexels-photo-7991579.jpeg?auto=compress&cs=tinysrgb&w=800', 'Fans lined up for hours to see the latest superhero installment.', 'Cinemas reported seeing sold-out shows across the country... (Full story content here)'),
('Space Agency Announces Mars Mission Timeline', 'Technology', 'https://images.pexels.com/photos/586056/pexels-photo-586056.jpeg?auto=compress&cs=tinysrgb&w=800', 'Humans could step on the red planet sooner than expected.', 'New propulsion technology has shortened the estimated travel time... (Full story content here)'),
('Market Rally Continues as Inflation Data Improving', 'World', 'https://images.pexels.com/photos/6801648/pexels-photo-6801648.jpeg?auto=compress&cs=tinysrgb&w=800', 'Global markets reacted positively to the latest economic reports.', 'Investors are optimistic as key indicators suggest a soft landing... (Full story content here)');
